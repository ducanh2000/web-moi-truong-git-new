<?php  
	namespace App\models;
	/**
	 * 
	 */
	use Illuminate\Database\Eloquent\Model;
	class users extends Model
	{
		protected  $table = 'users';
		protected  $fillable = ['name','email','password'];
	}
?>