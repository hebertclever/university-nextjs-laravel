<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesTableSeeder::class,
            PersonsTableSeeder::class,
            UsersTableSeeder::class,
            CourseCategoriesTableSeeder::class,
            CoursesTableSeeder::class,
            ClassesTableSeeder::class,
            AttendancesTableSeeder::class,
            LinkedInProfilesTableSeeder::class,
            NotificationsTableSeeder::class,
            PagesTableSeeder::class,
            LinksTableSeeder::class,
            LogsTableSeeder::class,
            ForumsTableSeeder::class,
            ForumPostsTableSeeder::class,
            GroupProjectsTableSeeder::class,
            GroupProjectMembersTableSeeder::class,
            GradesTableSeeder::class,
            StudentGroupsTableSeeder::class,
            StudentGroupMembersTableSeeder::class,
            ClassEnrollmentsTableSeeder::class,
        ]);
    }
}
