angular.module('bindExample', [])
    .controller('ExampleController', ['$scope','$http', function($scope,$http,wantAdTreeConstant) {
      $scope.tree = wantAdTreeConstant;
     $http.get('postAdTree').
            success(function (data, status, headers, config) {
        
                    $scope.PostAdTree  = data;
            }).
            error(function (data, status, headers, config) {
                
        });
      $scope.want_ad_tree = {
                "top_category": {
                    "show": true,
                    "label": "I Want a",
                    "default": "Residential",
                    "options": [
                        {
                            "show": true,
                            "type": "boolean",
                            "label": "Residential",
                            "value": "Residential"
                        },
                        {
                            "show": true,
                            "type": "boolean",
                            "label": "Commercial",
                            "value": "Commercial"
                        },
                        {
                            "show": true,
                            "type": "boolean",
                            "label": "Agricultural",
                            "value": "Agricultural"
                        }
                    ],
                    "value": ""
                },
                "ad_type": {
                    "show": true,
                    "label": "Looking to",
                    "default": "buy",
                    "options": {
                        'residential': [
                            {
                                "show": true,
                                "type": "boolean",
                                "label": "Buy",
                                "value": "buy"
                            },
                            {
                                "show": true,
                                "type": "boolean",
                                "label": "Rent-In",
                                "value": "rent_in"
                            },
                            {
                                "show": true,
                                "type": "boolean",
                                "label": "Looking for PG-Hostels",
                                "value": "pg_hostels"
                            }
                        ],
                        'commercial' : [
                            {
                                "show": true,
                                "type": "boolean",
                                "label": "Buy",
                                "value": "buy"
                            },
                            {
                                "show": true,
                                "type": "boolean",
                                "label": "Rent-In",
                                "value": "rent_in"
                            }
                        ]

                    },
                    "value": "",
                },
                "user_details": {
                    "type": {
                        "show" : true,
                        "label": "I am",
                        "default": "",
                        "options": [
                            {
                                "show": true,
                                "type": "boolean",
                                "label": "Individual",
                                "value": "INDIVIDUAL"
                            },
                            {
                                "show": true,
                                "type": "boolean",
                                "label": "Broker",
                                "value": "BROKER"
                            }
                        ],
                        "value": ""
                },   },
            
            "property_type": {
                    "show": true,
                    "label": "Property Type",
                    "options": {
                        "residential": [
                            {
                                "show": true,
                                "type": "boolean",
                                "display_label": "Apartment",
                                "label": "Apartment",
                                "value": false,
                                "icon_class": "icon-apartment"
                            },
                            {
                                "show": true,
                                "type": "boolean",
                                "display_label": "House / Villa",
                                "label": "Villa",
                                "value": false,
                                "icon_class": "icon-entity-profile"
                            },
                            {
                                "show": true,
                                "type": "boolean",
                                "display_label": "Builder Flat",
                                "label": "BuilderFloor",
                                "value": false,
                                "icon_class": "icon-house"
                            },
                            {
                                "show": true,
                                "type": "boolean",
                                "display_label": "Plot",
                                "label": "Plot",
                                "value": false,
                                "icon_class": "icon-plot"
                            }
                        ],
                        "commercial": [
                            {
                                "show": true,
                                "type": "boolean",
                                "display_label": "Office",
                                "label": "Office",
                                "value": false,
                                "icon_class": "icon-office"
                            },
                            {
                                "show": true,
                                "type": "boolean",
                                "display_label": "Shop",
                                "label": "Shop",
                                "value": false,
                                "icon_class": "icon-shop"
                            },
                            {
                                "show": true,
                                "type": "boolean",
                                "display_label": "Complex",
                                "label": "Complex",
                                "value": false,
                                "icon_class": "icon-complex"
                            },
                            {
                                "show": true,
                                "type": "boolean",
                                "display_label": "Plot",
                                "label": "Plot",
                                "value": false,
                                "icon_class": "icon-plot"
                            }
                        ],
                    },
                },
            };





console.log($scope.want_ad_tree);

      $scope.salutation = 'Hello';
      $scope.name = 'World';
      $scope.topCategoryValue = $scope.want_ad_tree.top_category.default ?
            $scope.want_ad_tree.top_category.default.toLowerCase() :'';
            
      $scope.setData = function (obj, field) {
            switch (field) {
                case 'userType':
                $scope.want_ad_tree.user_details.type.value = obj.userType.value;
                $scope.userTypeError = false;
                break;
                case 'topCategory':
                $scope.want_ad_tree.top_category.value = obj.topCategory.value;
                $scope.topCategoryValue = obj.topCategory.value.toLowerCase();
                $scope.userTypeError = false;
                default:
            }
        }

    }]);