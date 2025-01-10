
Search within code
 
‎app/Models/MCastMovies.php
+24
Original file line number	Diff line number	Diff line change
@@ -0,0 +1,24 @@
<?php
namespace App\Models;
use App\Models\MCasts;
use App\Models\MMovies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class MCastMovies extends Model
{
    use HasFactory;
    
    protected $table = 'm_cast_movies';
    public function cast()
	{
		return $this->belongsTo(MMovies::class);
	}
    public function movie()
	{
		return $this->belongsTo(MCasts::class);
	}
}
