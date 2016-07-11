<div class="positonfiedler" ng-show="want_ad_tree.user_details.type.show">
    <span class="iwant margin-top" ng-bind-template="@{{want_ad_tree.user_details.type.label}} *"></span>
    <ul class="radio-posting margin-bottom-p">
        <li ng-repeat="userType in want_ad_tree.user_details.type.options track by $index" ng-click="setData(this, 'userType')">
            <input ng-show="userType.show" type="radio" id="@{{ userType.value }}" name="userType" value=""
                   ng-checked="want_ad_tree.user_details.type.default === userType.value"
                   ga-directive ga-options="{'category': 'button-RealestateResponsiveUI', 'action': 'req_select_Real-Estate', 'label': 'select_postedby_@{{userType.label.toLowerCase()}}'}">
            <label ng-show="userType.show" for="@{{ userType.value }}" ng-bind="userType.label"></label>
        </li>
    </ul>

    <div class="error-container" ng-show="userTypeError">
        <small> Please select an user type</small>
    </div>
</div>