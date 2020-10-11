<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Officer;
use App\Models\Project;
use App\Models\Department;
use App\Models\Division;
use App\Models\Position;
use DB;
use Datetime;
use App\Models\UserManager;
use App\Models\Application;

define("SLA_limit_permanent", 60);
define("SLA_limit_outsource", 30);

class Product extends Model
{
    //
    protected $table='product';
    protected $fillable=['name','officerId', 'type', 'duration', 'status', 'location', 'numberNeeds','numberInProgress','numberJoin','numberFailed', 'departmentId', 'divisionId', 'projectId', 'userManagerId', 'positionId'];

    public function officer(){
        // foreignkey (officerId) di Vacancy nunjuk id di Officer
        return $this->belongsTo(Officer::class, 'officerId', 'id');
    }

    public function project(){
        // foreignkey (projectId) di Vacancy nunjuk id di Project
        return $this->belongsTo(Project::class, 'projectId', 'id');
    }

    public function department(){
        // foreignkey (vacancyId) di Vacancy nunjuk id di Project
        return $this->belongsTo(Department::class, 'departmentId', 'id');
    }

    public function division(){
        // foreignkey (vacancyId) di Vacancy nunjuk id di Division
        return $this->belongsTo(Division::class, 'divisionId', 'id');
    }
    
}