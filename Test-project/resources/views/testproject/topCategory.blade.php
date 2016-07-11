<div class="positonfiedler" ng-show="want_ad_tree.ad_outline.top_category.show">
    <span class="iwant margin-top" ng-bind-template="@{{want_ad_tree.ad_outline.top_category.label}} *"></span>
    <ul class="radio-posting margin-bottom-p">
        <li ng-repeat="topCategory in want_ad_tree.ad_outline.top_category.options track by $index" ng-click="setData(this, 'topCategory')">
            <input ng-if="topCategory.show" type="radio" id="@{{topCategory.value}}" name="topCategory" value=""
                   ng-checked="want_ad_tree.ad_outline.top_category.default === topCategory.value">
                   
            <label ng-if="topCategory.show" for="@{{topCategory.value}}" ng-bind="topCategory.label"></label>
        </li>
    </ul>

    <div class="error-container" ng-show="topCategoryError">
        <small> Please select a category</small>
    </div>
</div>
<div class="clearfix"></div>