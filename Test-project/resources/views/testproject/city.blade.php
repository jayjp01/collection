<div class="property-dr">
    <div class="input-label-post" >
     <label ng-bind-template="@{{want_ad_tree.city_locality.city.label}} *"></label>
            <i ng-click="" class="icon icon-down-open-mini"></i>
        <div class="postong-dropdwon input-icone-down" >
            <input type="text" name="wantadCity" id="wantadCity"
                tooltip="Select City of interest"
                ng-blur=""
                ng-model="want_ad_tree.city_locality.city.value"
                ng-value="want_ad_tree.city_locality.city.value"
                ng-pattern=/^[a-zA-Z]*$/
                ng-class="selectCityError ? 'error-field' : ''"
                required   
            >
            <div class="clearfix"></div>

            <ul class="dropdown-po">
                <li ng-repeat="(key,val) in myWelcome | filter: want_ad_tree.city_locality.city.value"
                    ng-click="setData(this, 'city')"
                    ga-directive ga-options="{'category': 'dropdown-RealestateResponsiveUI', 'action': 'req_select_Real-Estate', 'label': 'select_city_@{{val.name}}'}">@{{val.name}}</li>
           
            </ul>

            <div class="error-container" ng-show="selectCityError">
                <small> Please select a city</small>
            </div>
        </div>
    </div>
</div>