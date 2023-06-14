<?php

namespace Database\Seeders;

use App\Models\Incident;
use App\Models\Team;
use App\Models\User;
use App\Models\Venture;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::updateOrCreate([
            'email' => 'marlinf@ringier.co.za',
        ], [
            'name' => 'Marlin Forbes',
            'password' => Hash::make('password'),
        ]);

        $team = Team::updateOrCreate([
            'name' => 'Demo Team',
        ], [
            'personal_team' => false,
            'user_id' => $user->id,
        ]);

        if (!$user->belongsToTeam($team)) {
            $user->teams()->attach($team, ['role' => 'admin']);
        }

        $user->switchTeam($team);

        $venture = Venture::updateOrCreate([
            'team_id' => $team->id,
            'name' => 'Demo Venture',
        ], [
            'created_by' => $user->id,
        ]);

        for ($x = 1; $x <= 3; $x++) {
            $incident = $venture->incidents()->updateOrCreate([
                'title' => "Incident {$x}",
            ], [
                'status' => 'investigating',
                'created_by' => $user->id,
            ]);

            for ($y = 1; $y <= 3; $y++) {
                $update = $incident->updates()->updateOrCreate([
                    'content' => "Update {$y} about {$incident->id}",
                ], [
                    'created_by' => $user->id,
                    'resolve_incident' => false,
                ]);

            }
        }
    }
}
