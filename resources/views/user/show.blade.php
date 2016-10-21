<div>
  <div class='user-sheet well'>
    <img alt="Identicon for {{ $myUser->firstName.' '.$myUser->lastName }}" title="identicon" class="avatar img-responsive" src='{{ $myUser->photoUri }}'/>
    <div>Hi! My name is {{ $myUser->firstName.' '.$myUser->lastName }}</div>
    <div class="property-list">
        @foreach($myUser->getDisplayProperties() as $propertyKey => $propertyValue)
        <div class="user-property row">
            <div class="label col-xs-3">{{ $propertyKey }}:</div>
            <div class="col-xs-12 col-sm-6">{{ $propertyValue }}</div>
        </div>
        @endforeach
    </div>
  </div>
  @if (isset($DEBUG) && $DEBUG != FALSE)
  <div>
    {{ dump($myUser) }}
  </div>
  @endif
</div>