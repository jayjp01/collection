{
    "ad_outline": {
        "top_category": {
            "show": true,
            "label": "I Want a",
            "default": "Residential",
            "options": [{
                "show": true,
                "type": "boolean",
                "label": "Residential",
                "value": "Residential"
            }, {
                "show": true,
                "type": "boolean",
                "label": "Commercial",
                "value": "Commercial"
            }, {
                "show": true,
                "type": "boolean",
                "label": "Agricultural",
                "value": "Agricultural"
            }],
            "value": ""
        },
        "ad_type": {
            "show": true,
            "label": "Looking to",
            "default": "buy",
            "options": {
                "residential": [{
                    "show": true,
                    "type": "boolean",
                    "label": "Buy",
                    "value": "buy"
                }, {
                    "show": true,
                    "type": "boolean",
                    "label": "Rent-In",
                    "value": "rent_in"
                }, {
                    "show": true,
                    "type": "boolean",
                    "label": "Looking for PG-Hostels",
                    "value": "pg_hostels"
                }],
                "commercial": [{
                    "show": true,
                    "type": "boolean",
                    "label": "Buy",
                    "value": "buy"
                }, {
                    "show": true,
                    "type": "boolean",
                    "label": "Rent-In",
                    "value": "rent_in"
                }]

            },
            "value": ""
        },
        "property_type": {
            "show": true,
            "label": "Property Type",
            "options": {
                "residential": [{
                    "show": true,
                    "type": "boolean",
                    "display_label": "Apartment",
                    "label": "Apartment",
                    "value": false,
                    "icon_class": "icon-apartment"
                }, {
                    "show": true,
                    "type": "boolean",
                    "display_label": "House / Villa",
                    "label": "Villa",
                    "value": false,
                    "icon_class": "icon-entity-profile"
                }, {
                    "show": true,
                    "type": "boolean",
                    "display_label": "Builder Flat",
                    "label": "BuilderFloor",
                    "value": false,
                    "icon_class": "icon-house"
                }, {
                    "show": true,
                    "type": "boolean",
                    "display_label": "Plot",
                    "label": "Plot",
                    "value": false,
                    "icon_class": "icon-plot"
                }],
                "commercial": [{
                    "show": true,
                    "type": "boolean",
                    "display_label": "Office",
                    "label": "Office",
                    "value": false,
                    "icon_class": "icon-office"
                }, {
                    "show": true,
                    "type": "boolean",
                    "display_label": "Shop",
                    "label": "Shop",
                    "value": false,
                    "icon_class": "icon-shop"
                }, {
                    "show": true,
                    "type": "boolean",
                    "display_label": "Complex",
                    "label": "Complex",
                    "value": false,
                    "icon_class": "icon-complex"
                }, {
                    "show": true,
                    "type": "boolean",
                    "display_label": "Plot",
                    "label": "Plot",
                    "value": false,
                    "icon_class": "icon-plot"
                }],
                "agricultural": [{
                    "show": true,
                    "type": "boolean",
                    "display_label": "Land",
                    "label": "Land",
                    "value": false,
                    "icon_class": "icon-plot"
                }]
            },
            "values": ""
        }
    },
    "project": {
        "show": true,
        "label": "Project Name",
        "values": "",
        "ids": ""
    },
    "user_details": {
        "type": {
            "show": true,
            "label": "I am",
            "default": "",
            "options": [{
                "show": true,
                "type": "boolean",
                "label": "Individual",
                "value": "INDIVIDUAL"
            }, {
                "show": true,
                "type": "boolean",
                "label": "Broker",
                "value": "BROKER"
            }],
            "value": ""
        },
        "name": {
            "show": true,
            "label": "Your Name",
            "value": ""
        },
        "mobile": {
            "show": true,
            "label": "Your Mobile",
            "value": ""
        },
        "email": {
            "show": true,
            "label": "Email Id",
            "value": ""
        }
    },
    "city_locality": {
        "city": {
            "show": true,
            "label": "Property City",
            "value": "",
            "id": ""
        },
        "locality": {
            "show": true,
            "label": "Location",
            "values": "",
            "ids": ""
        }
    },
    "about_property": {
        "price_range": {
            "show": true,
            "label": "Price Range",
            "options": {
                "residential": {
                    "buy": {
                        "min": [{
                            "value": "0+",
                            "api_value": "0"
                        }, {
                            "value": "5 Lakh+",
                            "api_value": "500000"
                        }, {
                            "value": "10 Lakh+",
                            "api_value": "1000000"
                        }, {
                            "value": "25 Lakh+",
                            "api_value": "2500000"
                        }, {
                            "value": "50 Lakh+",
                            "api_value": "5000000"
                        }, {
                            "value": "1 Cr+",
                            "api_value": "10000000"
                        }],
                        "max": [{
                            "value": "5 Lakh",
                            "api_value": "500000"
                        }, {
                            "value": "10 Lakh",
                            "api_value": "1000000"
                        }, {
                            "value": "25 Lakh",
                            "api_value": "2500000"
                        }, {
                            "value": "50 Lakh",
                            "api_value": "5000000"
                        }, {
                            "value": "1 Cr",
                            "api_value": "10000000"
                        }, {
                            "value": "5Cr",
                            "api_value": "50000000"
                        }]
                    },
                    "rent_in": {
                        "min": [{
                            "value": "0+",
                            "api_value": "0"
                        }, {
                            "value": "1000+",
                            "api_value": "1000"
                        }, {
                            "value": "10000+",
                            "api_value": "10000"
                        }, {
                            "value": "25000+",
                            "api_value": "25000"
                        }, {
                            "value": "40000+",
                            "api_value": "40000"
                        }, {
                            "value": "70000+",
                            "api_value": "70000"
                        }],
                        "max": [{
                            "value": "1000",
                            "api_value": "1000"
                        }, {
                            "value": "10000",
                            "api_value": "10000"
                        }, {
                            "value": "25000",
                            "api_value": "25000"
                        }, {
                            "value": "40000",
                            "api_value": "40000"
                        }, {
                            "value": "70000",
                            "api_value": "70000"
                        }, {
                            "value": "1 Lakh",
                            "api_value": "100000"
                        }]
                    },
                    "pg_hostels": {
                        "min": [{
                            "value": "0+",
                            "api_value": "0"
                        }, {
                            "value": "1000+",
                            "api_value": "1000"
                        }, {
                            "value": "10000+",
                            "api_value": "10000"
                        }, {
                            "value": "25000+",
                            "api_value": "25000"
                        }, {
                            "value": "40000+",
                            "api_value": "40000"
                        }, {
                            "value": "70000+",
                            "api_value": "70000"
                        }],
                        "max": [{
                            "value": "1000",
                            "api_value": "1000"
                        }, {
                            "value": "10000",
                            "api_value": "10000"
                        }, {
                            "value": "25000",
                            "api_value": "25000"
                        }, {
                            "value": "40000",
                            "api_value": "40000"
                        }, {
                            "value": "70000",
                            "api_value": "70000"
                        }, {
                            "value": "1 Lakh",
                            "api_value": "100000"
                        }]
                    }
                },
                "commercial": {
                    "buy": {
                        "min": [{
                            "value": "0+",
                            "api_value": "0"
                        }, {
                            "value": "5 Lakh+",
                            "api_value": "500000"
                        }, {
                            "value": "10 Lakh+",
                            "api_value": "1000000"
                        }, {
                            "value": "25 Lakh+",
                            "api_value": "2500000"
                        }, {
                            "value": "50 Lakh+",
                            "api_value": "5000000"
                        }, {
                            "value": "1 Cr+",
                            "api_value": "10000000"
                        }],
                        "max": [{
                            "value": "5 Lakh",
                            "api_value": "500000"
                        }, {
                            "value": "10 Lakh",
                            "api_value": "1000000"
                        }, {
                            "value": "25 Lakh",
                            "api_value": "2500000"
                        }, {
                            "value": "50 Lakh",
                            "api_value": "5000000"
                        }, {
                            "value": "1 Cr",
                            "api_value": "10000000"
                        }, {
                            "value": "5Cr",
                            "api_value": "50000000"
                        }]
                    },
                    "rent_in": {
                        "min": [{
                            "value": "0+",
                            "api_value": "0"
                        }, {
                            "value": "50000+",
                            "api_value": "50000"
                        }, {
                            "value": "2 Lakh+",
                            "api_value": "200000"
                        }, {
                            "value": "5 Lakh+",
                            "api_value": "500000"
                        }, {
                            "value": "8 Lakh+",
                            "api_value": "800000"
                        }, {
                            "value": "10 Lakh+",
                            "api_value": "1500000"
                        }],
                        "max": [{
                            "value": "50000",
                            "api_value": "50000"
                        }, {
                            "value": "2 Lakh",
                            "api_value": "200000"
                        }, {
                            "value": "5 Lakh",
                            "api_value": "500000"
                        }, {
                            "value": "8 Lakh",
                            "api_value": "800000"
                        }, {
                            "value": "10 Lakh",
                            "api_value": "1000000"
                        }, {
                            "value": "15 Lakh",
                            "api_value": "1500000"
                        }]
                    }
                },
                "agricultural": {
                    "buy": {
                        "min": [{
                            "value": "0+",
                            "api_value": "0"
                        }, {
                            "value": "5 Lakh+",
                            "api_value": "500000"
                        }, {
                            "value": "10 Lakh+",
                            "api_value": "1000000"
                        }, {
                            "value": "25 Lakh+",
                            "api_value": "2500000"
                        }, {
                            "value": "50 Lakh+",
                            "api_value": "5000000"
                        }, {
                            "value": "1 Cr+",
                            "api_value": "10000000"
                        }],
                        "max": [{
                            "value": "5 Lakh",
                            "api_value": "500000"
                        }, {
                            "value": "10 Lakh",
                            "api_value": "1000000"
                        }, {
                            "value": "25 Lakh",
                            "api_value": "2500000"
                        }, {
                            "value": "50 Lakh",
                            "api_value": "5000000"
                        }, {
                            "value": "1 Cr",
                            "api_value": "10000000"
                        }, {
                            "value": "5Cr",
                            "api_value": "50000000"
                        }]
                    }
                }
            },
            "value": {
                "min": -1,
                "max": -1
            }
        },
        "area_range": {
            "show": true,
            "label": "Area Range",
            "options": {
                "residential": {
                    "min": [{
                        "value": "0+",
                        "api_value": "0"
                    }, {
                        "value": "500+",
                        "api_value": "500"
                    }, {
                        "value": "1000+",
                        "api_value": "1000"
                    }, {
                        "value": "1500+",
                        "api_value": "1500"
                    }, {
                        "value": "2000+",
                        "api_value": "2000"
                    }],
                    "max": [{
                        "value": "500",
                        "api_value": "500"
                    }, {
                        "value": "1000",
                        "api_value": "1000"
                    }, {
                        "value": "1500",
                        "api_value": "1500"
                    }, {
                        "value": "2000",
                        "api_value": "2000"
                    }]
                },
                "commercial": {
                    "min": [{
                        "value": "0+",
                        "api_value": "0"
                    }, {
                        "value": "2000+",
                        "api_value": "2000"
                    }, {
                        "value": "5000+",
                        "api_value": "5000"
                    }, {
                        "value": "8000+",
                        "api_value": "8000"
                    }, {
                        "value": "12000+",
                        "api_value": "12000"
                    }],
                    "max": [{
                        "value": "2000",
                        "api_value": "2000"
                    }, {
                        "value": "5000",
                        "api_value": "5000"
                    }, {
                        "value": "8000",
                        "api_value": "8000"
                    }, {
                        "value": "12000",
                        "api_value": "12000"
                    }]
                },
                "agricultural": {
                    "min": [{
                        "value": "0+",
                        "api_value": "0"
                    }, {
                        "value": "2000+",
                        "api_value": "2000"
                    }, {
                        "value": "5000+",
                        "api_value": "5000"
                    }, {
                        "value": "8000+",
                        "api_value": "8000"
                    }, {
                        "value": "12000+",
                        "api_value": "12000"
                    }],
                    "max": [{
                        "value": "2000",
                        "api_value": "2000"
                    }, {
                        "value": "5000",
                        "api_value": "5000"
                    }, {
                        "value": "8000",
                        "api_value": "8000"
                    }, {
                        "value": "12000",
                        "api_value": "12000"
                    }]
                }
            },
            "value": {
                "min": -1,
                "max": -1
            }
        },
        "bedroom": {
            "show": true,
            "label": "Bedrooms",
            "options": [{
                "show": true,
                "type": "boolean",
                "label": "1",
                "value": false
            }, {
                "show": true,
                "type": "boolean",
                "label": "2",
                "value": false
            }, {
                "show": true,
                "type": "boolean",
                "label": "3",
                "value": false
            }, {
                "show": true,
                "type": "boolean",
                "label": "4",
                "value": false
            }, {
                "show": true,
                "type": "boolean",
                "label": "5",
                "value": false
            }],
            "value": ""
        },
        "gender": {
            "show": true,
            "label": "Gender",
            "options": [{
                "show": true,
                "type": "boolean",
                "label": "Male",
                "value": "M"
            }, {
                "show": true,
                "type": "boolean",
                "label": "Female",
                "value": "F"
            }],
            "value": ""
        },
        "construction_phase": {
            "show": true,
            "label": "Construction Phase",
            "options": [{
                "show": true,
                "type": "boolean",
                "label": "New launch",
                "value": "NEW_LAUNCH"
            }, {
                "show": true,
                "type": "boolean",
                "label": "Under construction",
                "value": "UNDER_CONSTRUCTION"
            }, {
                "show": true,
                "type": "boolean",
                "label": "Ready to move in",
                "value": "READY_TO_MOVE_IN"
            }],
            "value": ""
        },
        "facing": {
            "side": {
                "show": true,
                "label": "Facing",
                "options": [{
                    "show": true,
                    "type": "boolean",
                    "label": "Pool",
                    "value": false,
                    "icon_class": "icon-swimming-pool"
                }, {
                    "show": true,
                    "type": "boolean",
                    "label": "Garden",
                    "value": false,
                    "icon_class": "icon-landscaped-garden"
                }, {
                    "show": true,
                    "type": "boolean",
                    "label": "Lake",
                    "value": false,
                    "icon_class": "icon-club-house"
                }, {
                    "show": true,
                    "type": "boolean",
                    "label": "Road",
                    "value": false,
                    "icon_class": "icon-plot"
                }]
            },
            "direction": {
                "show": true,
                "label": "",
                "options": [{
                    "show": true,
                    "type": "boolean",
                    "label": "North",
                    "value": false
                }, {
                    "show": true,
                    "type": "boolean",
                    "label": "East",
                    "value": false
                }, {
                    "show": true,
                    "type": "boolean",
                    "label": "West",
                    "value": false
                }, {
                    "show": true,
                    "type": "boolean",
                    "label": "South",
                    "value": false
                }]
            }
        },
        "urgency": {
            "show": true,
            "label": "Urgency",
            "options": [{
                "show": true,
                "type": "boolean",
                "label": "Next 7 days",
                "value": "7"
            }, {
                "show": true,
                "type": "boolean",
                "label": "Next 15 days",
                "value": "15"
            }, {
                "show": true,
                "type": "boolean",
                "label": "Within a month",
                "value": "30"
            }, {
                "show": true,
                "type": "boolean",
                "label": "Within 6 months",
                "value": "180"
            }],
            "value": ""
        },
        "remarks": {
            "show": true,
            "label": "Remarks",
            "value": ""
        }
    },
    "amenities": {
        "show": true,
        "label": "Amenities",
        "options": {
            "residential": [{
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Fire Safety",
                "class": "icon-fire-safety"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Earthquake Resistant",
                "class": "icon-earthquake-resistant"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "24Hr Backup Electricity",
                "class": "icon-electricitybackup"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Gated Community",
                "class": "icon-gated-community"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Gas Pipeline",
                "class": "icon-gas-pipeline"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Jogging Track",
                "class": "icon-jogging-track2"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "CCTV Cameras",
                "class": "icon-cctv"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Lift",
                "class": "icon-lift"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Landscaped Garden",
                "class": "icon-landscaped-garden"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Wifi",
                "class": "icon-signal"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Covered Car Parking",
                "class": "icon-covered-car-parking"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Basement Car Parking",
                "class": "icon-basement-car-parking"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Car Parking",
                "class": "icon-car-parking"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Intercom",
                "class": "icon-intercom"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Swimming Pool",
                "class": "icon-swimming-pool"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Rain Water Harvesting",
                "class": "icon-rain-water-harvesting"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Play Area",
                "class": "icon-play-area"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Gymnasium",
                "class": "icon-gymnasium"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Indoor Games",
                "class": "icon-indoor-games"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Club House",
                "class": "icon-club-house"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Health Facilities",
                "class": "icon-health-facilities"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Maintenance Staff",
                "class": "icon-maintenance-staff"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Cafeteria",
                "class": "icon-cafeteria"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Basket Ball Court",
                "class": "icon-basket-ball-court"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "AC Lobby",
                "class": "icon-ac-lobby"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Badminton Court",
                "class": "icon-badminton-court"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Waste Disposal",
                "class": "icon-waste-disposal"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Tennis Court",
                "class": "icon-tennis-court"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Community Hall",
                "class": "icon-community-hall"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Convenience Store",
                "class": "icon-shopping-malls"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Library",
                "class": "icon-library"
            }],
            "commercial": [{
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Fire Alarm",
                "class": "icon-fire-alarm"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Intercom Facility",
                "class": "icon-intercom"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Power Backup",
                "class": "icon-electricitybackup"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "High Speed Internet",
                "class": "icon-high-speed-internet-access"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Security Personnel",
                "class": "icon-security-personnel"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Conference Room",
                "class": "icon-conference-room"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Lift",
                "class": "icon-lift"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Reserved Parking",
                "class": "icon-reserved-car-parking"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Service Lift",
                "class": "icon-goods-lift"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Visitor Parking",
                "class": "icon-visitors-car-parking"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Centrally Air Conditioned",
                "class": "icon-centralised-ac"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "ATM",
                "class": "icon-atm-centre"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Bank Attached Property",
                "class": "icon-bank-attached-property"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Maintenance Staff",
                "class": "icon-maintenance-staff"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Waste Disposal",
                "class": "icon-waste-disposal"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Food Court",
                "class": "icon-cafeteria"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Day Care Center",
                "class": "icon-baby-day-care"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "GYM",
                "class": "icon-gymnasium"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "label": "Indoor Games Room",
                "class": "icon-indoor-games"
            }]
        }
    },
    "furnishing": {
        "show": true,
        "label": "Furnishing",
        "options": {
            "residential": [{
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-air-condition-1",
                "label": "Air Conditioner"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-beds",
                "label": "Beds"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-sofa",
                "label": "Sofa"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-refrigerator",
                "label": "Refrigerator"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-washing-machine",
                "label": "Washing Machine"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-wardrobes",
                "label": "Wardrobes"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-dining-table",
                "label": "Dining Table"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-stove",
                "label": "Stove"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-tv",
                "label": "TV"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-water-purifier2",
                "label": "Water Filter"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-microwave-oven",
                "label": "Microwave"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-dishwasher2-1",
                "label": "Dishwasher"
            }],
            "commercial": [{
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-cubicle",
                "label": "Cubicle"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-chair",
                "label": "Chairs"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-air-condition-1",
                "label": "Air Conditioner"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-storage-cupboards",
                "label": "Storage Cupboards"
            }, {
                "show": true,
                "type": "boolean",
                "value": false,
                "class": "icon-electrical-fittings",
                "label": "Electrical Fittings"
            }]
        }
    },
    "mail_sms_alert": {
        "show": true,
        "label": "Send me Quikr Email/SMS Alerts for people offering apartments for rent IN-CITY",
        "value": ""
    }
}