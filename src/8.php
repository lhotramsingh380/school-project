 <?php
class User{
	public $id;
	public $name;
}
$users = array(
	array('id' => 1, 'name' => 'John'),
	array('id' => 2, 'name' => 'Jane'),
);
function getUserById($id){
	foreach($users as $user){
		if($user['id'] == $id){
			return $user;
		}
	}
	return false;
}
$user = getUserById(1);
echo 'Hello, ' . $user->name . '!';
?>