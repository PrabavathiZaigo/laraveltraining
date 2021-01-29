
<b>ForEach Statement:</b>
<?php $users = [ ["name"=>"praba","age"=>22,"phone"=>1234],
                ["name"=>"reessma","age"=>23,"phone"=>123456] ,
                ["name"=>"ragavi","age"=>21,"phone"=>123456],
                ["name"=>"rogini","age"=>25,"phone"=>123456]] ?>
@foreach($users as $user)

    <li>{{$user["name"]}}</li>
@endforeach