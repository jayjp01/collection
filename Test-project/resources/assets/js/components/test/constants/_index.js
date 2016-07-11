(function() {

    'use strict';

    var angular = require('angular');
    var bulk = require('bulk-require');

    module.exports = angular.module('Test-project.components.test.constants', []);

    bulk(__dirname, ['./**/!(*_index|*.spec).js']);

})();