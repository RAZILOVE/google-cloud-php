<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

return [
    'interfaces' => [
        'google.cloud.discoveryengine.v1.ConversationalSearchService' => [
            'ConverseConversation' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/dataStores/*/conversations/*}:converse',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}:converse',
                        'body' => '*',
                    ],
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}:converse',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CreateConversation' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=projects/*/locations/*/dataStores/*}/conversations',
                'body' => 'conversation',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/conversations',
                        'body' => 'conversation',
                    ],
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1/{parent=projects/*/locations/*/collections/*/engines/*}/conversations',
                        'body' => 'conversation',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteConversation' => [
                'method' => 'delete',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/dataStores/*/conversations/*}',
                'additionalBindings' => [
                    [
                        'method' => 'delete',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}',
                    ],
                    [
                        'method' => 'delete',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetConversation' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*/locations/*/dataStores/*/conversations/*}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListConversations' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{parent=projects/*/locations/*/dataStores/*}/conversations',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/conversations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{parent=projects/*/locations/*/collections/*/engines/*}/conversations',
                    ],
                ],
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateConversation' => [
                'method' => 'patch',
                'uriTemplate' => '/v1/{conversation.name=projects/*/locations/*/dataStores/*/conversations/*}',
                'body' => 'conversation',
                'additionalBindings' => [
                    [
                        'method' => 'patch',
                        'uriTemplate' => '/v1/{conversation.name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}',
                        'body' => 'conversation',
                    ],
                    [
                        'method' => 'patch',
                        'uriTemplate' => '/v1/{conversation.name=projects/*/locations/*/collections/*/engines/*/conversations/*}',
                        'body' => 'conversation',
                    ],
                ],
                'placeholders' => [
                    'conversation.name' => [
                        'getters' => [
                            'getConversation',
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
        'google.longrunning.Operations' => [
            'GetOperation' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*/operations/*}',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataConnector/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/branches/*/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/models/*/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/schemas/*/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/siteSearchEngine/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/siteSearchEngine/targetSites/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/engines/*/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/dataStores/*/branches/*/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/dataStores/*/models/*/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/dataStores/*/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/operations/*}',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/operations/*}',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListOperations' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*}/operations',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataConnector}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/branches/*}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/models/*}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/schemas/*}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/siteSearchEngine/targetSites}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*/siteSearchEngine}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/dataStores/*}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*/engines/*}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/collections/*}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/dataStores/*/branches/*}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/dataStores/*/models/*}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*/dataStores/*}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*/locations/*}/operations',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1/{name=projects/*}/operations',
                    ],
                ],
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'numericEnums' => true,
];
