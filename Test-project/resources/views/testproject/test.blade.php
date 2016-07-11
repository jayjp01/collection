<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3" ng-repeat= 'trak in selectedheckBox'>
    <span>@{{trak.label | limitTo:4}}</span>
     <span>@{{trak.bhk}}</span>
       <span>@{{person.name}}</span>
     <h5>@{{ clock.now }}</h5>
    </div>
     <div class="form-group">
                <button class='btn btn-primary' type='button' ng-click="continueToDashboard('hello');"> Continue to Dashboard →</button>
            </div>
    </div>
                                