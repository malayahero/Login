# Login
 
User Role you can see in App\Http\Kernel on syntax 65 "'checkRole' => App\Http\Middleware\CheckRole::class,"
This is for User Role what user permission do you need to add some privileges to SQL.

#On Create Table

public function up()
   {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('admin')->default(false);
            $table->boolean('moderator')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }
    
 If one from boolean is true select you get permission,Example if boolean admin is true you got permission for admin or if boolean moderator is true you got moderator permission.
