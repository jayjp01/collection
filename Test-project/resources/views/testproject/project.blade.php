<div class="dropdwon-posting-1">
    <!-- dropdwon start here -->
    <div class="postong-dropdwon">
        <div class="input-label-post" ng-class="{'focus-label' : wantadForm.wantadProject.$viewValue || projectFocus}">
            <input
                tooltip="Pick projects from the localities of your choice."
                type="text"
                name="wantadProject"
                typeahead="s.name for s in getSuggestedProjects($viewValue)"
                ng-model="want_ad_tree.project.values"
                ng-focus="projectFocus=true"
                ng-blur="projectFocus=false"
                typeahead-on-select="projectSelection($item)"
                maxlength="30"
                ng-pattern="/^[a-zA-Z0-9_ ]*$/"
            >
            <label>Project Name</label>
        </div>
        <div class="clearfix"></div>
    </div><!-- dropdwon end here -->
    <div class="location-box-add">
        <span ng-repeat="selProj in selectedProjects">@{{ selProj.name }} <i class="icon icon-reset" ng-click="projectRemoval(selProj)"></i></span>
    </div>
    <div class="clearfix"></div>
</div>