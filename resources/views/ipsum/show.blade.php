<div>
  <div class='well'>
    {!! $myIpsum->getHtml() !!}
  </div>
  @if (isset($DEBUG) && $DEBUG != FALSE)
  <div>
    {{ dump($myIpsum) }}
  </div>
  @endif
</div>