<div class="positonfiedler" ng-show="want_ad_tree.ad_outline.ad_type.show">
    <span class="iwant" ng-bind-template="@{{want_ad_tree.ad_outline.ad_type.label}} *"></span>
    <ul class="radio-posting margin-bottom-p">
        <li ng-repeat="adType in want_ad_tree.ad_outline.ad_type.options[topCategoryValue ? topCategoryValue : 'residential'] track by $index" ng-click="setData(this, 'adType')">
            <input ng-if="adType.show" type="radio" id="@{{adType.value}}" name="adType" value=""
                   ng-checked="adTypeValue === adType.value"
                   ga-directive ga-options="{'category': 'button-RealestateResponsiveUI', 'action': 'req_select_Real-Estate', 'label': 'select_adtype_@{{adType.value.toLowerCase()}}'}">
            <label ng-if="adType.show" for="@{{adType.value}}" ng-bind="adType.label"></label>
        </li>
    </ul>

    <div class="error-container" ng-show="adTypeError">
        <small> Please select a type</small>
    </div>
</div>