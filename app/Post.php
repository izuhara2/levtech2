<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 4ee560f05a887bac67ca51e2f40c90d3db15abee
=======
}
>>>>>>> refs/remotes/origin/master
