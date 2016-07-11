<div class="dropdwon-posting-1">
    <!-- dropdwon start here -->
    <div class="postong-dropdwon">
        <div class="input-label-post" ng-class="{'focus-label' : wantadForm.wantadLocality.$viewValue.length || locationFocus}">
            <input
                tooltip="You can select multiple localities"
                type="text"
                name="wantadLocality"
                typeahead="s.title for s in getSuggestedLocality($viewValue)"
                ng-model="want_ad_tree.city_locality.locality.values"
                ng-model-options="{ debounce: 500 }"
                ng-focus="locationFocus=true"
                ng-blur="locationFocus=false"
                typeahead-on-select="locationSelection($item)"
                required
            >
            <label>Location</label>
        </div>
        <div class="clearfix"></div>
    </div><!-- dropdwon end here -->
    <div class="location-box-add">
        <span ng-repeat="selLoc in selectedLocations">
            @{{ selLoc.title }}
            <i class="icon icon-reset" ng-click="locationRemoval(selLoc)"></i>
        </span>
    </div>
    <div class="clearfix"></div>
</div>