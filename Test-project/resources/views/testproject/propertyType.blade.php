<div class="posting-location-chosse" ng-show="want_ad_tree.ad_outline.property_type.show">
    <span class="iwant" ng-bind="want_ad_tree.ad_outline.property_type.label"></span>

    <ul class="posting-residential">
        <li ng-repeat="propertyType in want_ad_tree.ad_outline.property_type.options[topCategoryValue] track by $index"
            ng-click="propertyType.value = !propertyType.value"
            ng-class="{'active' : propertyType.value, 'hidden' :  'buy' != adTypeValue && 'Plot' == propertyType.display_label}"
            ng-model="propertyType.value" ng-show="propertyType.show">
            <a href="javascript:void(0)">
                <i class="icon" ng-class="propertyType.icon_class"></i>
                <b ng-bind="propertyType.display_label"></b>
            </a>

        </li>

        <div class="clearfix"></div>
    </ul>
</div>