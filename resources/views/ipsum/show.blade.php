<div class='ipsum-sheet'>
  <h2>Generated Lorem Ipsum:</h2>
  <div class='well'>
    {!! $myIpsum->getHtml() !!}
  </div>
  @if (isset($DEBUG) && $DEBUG != FALSE)
  <div>
    {{ dump($myIpsum) }}
  </div>
  @endif
</div>