<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Firestore\Tests\Unit;

use Google\Cloud\Core\Exception\NotFoundException;
use Google\Cloud\Core\RequestHandler;
use Google\Cloud\Core\Testing\FirestoreTestHelperTrait;
use Google\Cloud\Core\Testing\TestHelpers;
use Google\Cloud\Core\Timestamp;
use Google\Cloud\Firestore\Connection\ConnectionInterface;
use Google\Cloud\Firestore\DocumentReference;
use Google\Cloud\Firestore\DocumentSnapshot;
use Google\Cloud\Firestore\SnapshotTrait;
use Google\Cloud\Firestore\V1\Client\FirestoreClient as V1FirestoreClient;
use Google\Cloud\Firestore\ValueMapper;
use Google\Protobuf\Timestamp as ProtobufTimestamp;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\PhpUnit\ProphecyTrait;
use TypeError;

/**
 * @group firestore
 * @group firestore-snapshottrait
 */
class SnapshotTraitTest extends TestCase
{
    use FirestoreTestHelperTrait;
    use ProphecyTrait;

    public const PROJECT = 'example_project';
    public const DATABASE = '(default)';
    public const NAME = 'projects/example_project/databases/(default)/documents/a/b';

    private $connection;
    private $requestHandler;
    private $serializer;
    private $mapper;
    private $impl;
    private $valueMapper;

    public function setUp(): void
    {
        $this->connection = $this->prophesize(ConnectionInterface::class);
        $this->requestHandler = $this->prophesize(RequestHandler::class);
        $this->serializer = $this->getSerializer();
        $this->impl = TestHelpers::impl(SnapshotTrait::class);

        $this->valueMapper = new ValueMapper(
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            false
        );
    }

    public function testCreateSnapshot()
    {
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'batchGetDocuments',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);

                return $data['database'] == sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE)
                    && $data['documents'] == [self::NAME];
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn(new \ArrayIterator([
            [
                'found' => [
                    'name' => self::NAME,
                    'fields' => [
                        'hello' => [
                            'stringValue' => 'world'
                        ]
                    ]
                ]
            ]
        ]));

        $ref = $this->prophesize(DocumentReference::class);
        $ref->name()->willReturn(self::NAME);
        $res = $this->impl->call('createSnapshot', [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper,
            $ref->reveal()
        ]);

        $this->assertInstanceOf(DocumentSnapshot::class, $res);
        $this->assertEquals('world', $res['hello']);
        $this->assertEquals(self::NAME, $res->name());
        $this->assertTrue($res->exists());
    }

    public function testCreateSnapshotNonExistence()
    {
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'batchGetDocuments',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);

                return $data['database'] == sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE)
                    && $data['documents'] == [self::NAME];
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn(new \ArrayIterator([
            ['missing' => self::NAME]
        ]));

        $ref = $this->prophesize(DocumentReference::class);
        $ref->name()->willReturn(self::NAME);
        $res = $this->impl->call('createSnapshot', [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            $this->valueMapper,
            $ref->reveal()
        ]);

        $this->assertInstanceOf(DocumentSnapshot::class, $res);
        $this->assertEquals(self::NAME, $res->name());
        $this->assertFalse($res->exists());
    }

    public function testGetSnapshot()
    {
        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'batchGetDocuments',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);

                return $data['database'] == sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE)
                    && $data['documents'] == [self::NAME];
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn(new \ArrayIterator([
            ['found' => 'foo']
        ]));

        $this->assertEquals('foo', $this->impl->call('getSnapshot', [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            self::NAME
        ]));
    }

    public function testGetSnapshotReadTime()
    {
        $timestamp = [
            'seconds' => 100,
            'nanos' => 501
        ];

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'batchGetDocuments',
            Argument::that(function ($req) use ($timestamp) {
                $data = $this->getSerializer()->encodeMessage($req);
                $expectedTimestamp = json_decode((new ProtobufTimestamp($timestamp))
                ->serializeToJsonString());
                return $data['readTime'] == $expectedTimestamp;
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn(new \ArrayIterator([
            ['found' => 'foo']
        ]));

        $this->impl->call('getSnapshot', [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            self::NAME,
            ['readTime' => $timestamp]
        ]);
    }

    public function testGetSnapshotReadTimeInvalidReadTime()
    {
        $this->expectException(TypeError::class);

        $this->impl->call('getSnapshot', [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            self::NAME,
            ['readTime' => 'foo']
        ]);
    }

    public function testGetSnapshotNotFound()
    {
        $this->expectException(NotFoundException::class);

        $this->requestHandler->sendRequest(
            V1FirestoreClient::class,
            'batchGetDocuments',
            Argument::that(function ($req) {
                $data = $this->getSerializer()->encodeMessage($req);

                return $data['database'] == sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE)
                    && $data['documents'] == [self::NAME];
            }),
            Argument::cetera()
        )->shouldBeCalled()->willReturn(new \ArrayIterator([
            ['missing' => self::NAME]
        ]));

        $this->impl->call('getSnapshot', [
            $this->connection->reveal(),
            $this->requestHandler->reveal(),
            $this->serializer,
            self::NAME
        ]);
    }
}
