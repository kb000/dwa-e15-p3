<div>
 <img class="avatar" src='{{ $myUser->photoUri }}'/>
 <div>Hi! My name is {{ $myUser->firstName.' '.$myUser->lastName }}</div>
 <div>{{ dump($myUser) }}</div>
</div>