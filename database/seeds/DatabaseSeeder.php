<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ad','name' => 'Andorra', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ae','name' => 'United Arab Emirates', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'af','name' => 'Afghanistan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ag','name' => 'Antigua and Barbuda', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ai','name' => 'Anguilla', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'al','name' => 'Albania', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'am','name' => 'Armenia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'an','name' => 'Netherlands Antilles', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ao','name' => 'Angola', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'aq','name' => 'Antarctica', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ar','name' => 'Argentina', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'arpa','name' => 'Old style Arpanet', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'as','name' => 'American Samoa', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'at','name' => 'Austria', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'au','name' => 'Australia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'aw','name' => 'Aruba', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'az','name' => 'Azerbaidjan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ba','name' => 'Bosnia-Herzegovina', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bb','name' => 'Barbados', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bd','name' => 'Bangladesh', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'be','name' => 'Belgium', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bf','name' => 'Burkina Faso', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bg','name' => 'Bulgaria', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bh','name' => 'Bahrain', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bi','name' => 'Burundi', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bj','name' => 'Benin', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bm','name' => 'Bermuda', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bn','name' => 'Brunei Darussalam', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bo','name' => 'Bolivia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'br','name' => 'Brazil', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bs','name' => 'Bahamas', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bt','name' => 'Bhutan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bv','name' => 'Bouvet Island', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bw','name' => 'Botswana', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'by','name' => 'Belarus', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'bz','name' => 'Belize', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ca','name' => 'Canada', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cc','name' => 'Cocos (Keeling) Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cf','name' => 'Central African Republic', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cg','name' => 'Congo', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ch','name' => 'Switzerland', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ci','name' => 'Ivory Coast (Cote D\'Ivoire)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ck','name' => 'Cook Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cl','name' => 'Chile', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cm','name' => 'Cameroon', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cn','name' => 'China', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'co','name' => 'Colombia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'com','name' => 'Commercial', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cr','name' => 'Costa Rica', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cs','name' => 'Former Czechoslovakia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cu','name' => 'Cuba', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cv','name' => 'Cape Verde', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cx','name' => 'Christmas Island', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cy','name' => 'Cyprus', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'cz','name' => 'Czech Republic', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'de','name' => 'Germany', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'dj','name' => 'Djibouti', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'dk','name' => 'Denmark', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'dm','name' => 'Dominica', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'do','name' => 'Dominican Republic', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'dz','name' => 'Algeria', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ec','name' => 'Ecuador', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'edu','name' => 'USA Educational', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ee','name' => 'Estonia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'eg','name' => 'Egypt', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'eh','name' => 'Western Sahara', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'er','name' => 'Eritrea', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'es','name' => 'Spain', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'et','name' => 'Ethiopia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'fi','name' => 'Finland', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'fj','name' => 'Fiji', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'fk','name' => 'Falkland Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'fm','name' => 'Micronesia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'fo','name' => 'Faroe Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'fr','name' => 'France', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'fx','name' => 'France (European Territory)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ga','name' => 'Gabon', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gb','name' => 'Great Britain', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gd','name' => 'Grenada', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ge','name' => 'Georgia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gf','name' => 'French Guyana', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gh','name' => 'Ghana', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gi','name' => 'Gibraltar', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gl','name' => 'Greenland', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gm','name' => 'Gambia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gn','name' => 'Guinea', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gov','name' => 'USA Government', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gp','name' => 'Guadeloupe (French)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gq','name' => 'Equatorial Guinea', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gr','name' => 'Greece', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gs','name' => 'S. Georgia & S. Sandwich Isls.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gt','name' => 'Guatemala', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gu','name' => 'Guam (USA)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gw','name' => 'Guinea Bissau', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'gy','name' => 'Guyana', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'hk','name' => 'Hong Kong', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'hm','name' => 'Heard and McDonald Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'hn','name' => 'Honduras', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'hr','name' => 'Croatia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ht','name' => 'Haiti', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'hu','name' => 'Hungary', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'id','name' => 'Indonesia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ie','name' => 'Ireland', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'il','name' => 'Israel', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'in','name' => 'India', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'int','name' => 'International', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'io','name' => 'British Indian Ocean Territory', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'iq','name' => 'Iraq', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ir','name' => 'Iran', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'is','name' => 'Iceland', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'it','name' => 'Italy', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'jm','name' => 'Jamaica', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'jo','name' => 'Jordan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'jp','name' => 'Japan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ke','name' => 'Kenya', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'kg','name' => 'Kyrgyzstan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'kh','name' => 'Cambodia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ki','name' => 'Kiribati', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'km','name' => 'Comoros', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'kn','name' => 'Saint Kitts & Nevis Anguilla', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'kp','name' => 'North Korea', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'kr','name' => 'South Korea', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'kw','name' => 'Kuwait', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ky','name' => 'Cayman Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'kz','name' => 'Kazakhstan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'la','name' => 'Laos', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'lb','name' => 'Lebanon', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'lc','name' => 'Saint Lucia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'li','name' => 'Liechtenstein', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'lk','name' => 'Sri Lanka', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'lr','name' => 'Liberia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ls','name' => 'Lesotho', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'lt','name' => 'Lithuania', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'lu','name' => 'Luxembourg', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'lv','name' => 'Latvia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ly','name' => 'Libya', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ma','name' => 'Morocco', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mc','name' => 'Monaco', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'md','name' => 'Moldavia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mg','name' => 'Madagascar', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mh','name' => 'Marshall Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mil','name' => 'USA Military', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mk','name' => 'Macedonia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ml','name' => 'Mali', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mm','name' => 'Myanmar', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mn','name' => 'Mongolia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mo','name' => 'Macau', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mp','name' => 'Northern Mariana Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mq','name' => 'Martinique (French)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mr','name' => 'Mauritania', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ms','name' => 'Montserrat', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mt','name' => 'Malta', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mu','name' => 'Mauritius', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mv','name' => 'Maldives', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mw','name' => 'Malawi', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mx','name' => 'Mexico', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'my','name' => 'Malaysia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'mz','name' => 'Mozambique', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'na','name' => 'Namibia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'nato','name' => 'NATO (this was purged in 1996 - see hq.nato.int)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'nc','name' => 'New Caledonia (French)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ne','name' => 'Niger', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'net','name' => 'Network', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'nf','name' => 'Norfolk Island', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ng','name' => 'Nigeria', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ni','name' => 'Nicaragua', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'nl','name' => 'Netherlands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'no','name' => 'Norway', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'np','name' => 'Nepal', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'nr','name' => 'Nauru', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'nt','name' => 'Neutral Zone', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'nu','name' => 'Niue', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'nz','name' => 'New Zealand', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'om','name' => 'Oman', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'org','name' => 'Non-Profit Making Organisations (sic)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pa','name' => 'Panama', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pe','name' => 'Peru', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pf','name' => 'Polynesia (French)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pg','name' => 'Papua New Guinea', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ph','name' => 'Philippines', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pk','name' => 'Pakistan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pl','name' => 'Poland', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pm','name' => 'Saint Pierre and Miquelon', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pn','name' => 'Pitcairn Island', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pr','name' => 'Puerto Rico', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pt','name' => 'Portugal', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'pw','name' => 'Palau', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'py','name' => 'Paraguay', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'qa','name' => 'Qatar', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 're','name' => 'Reunion (French)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ro','name' => 'Romania', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ru','name' => 'Russian Federation', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'rw','name' => 'Rwanda', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sa','name' => 'Saudi Arabia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sb','name' => 'Solomon Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sc','name' => 'Seychelles', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sd','name' => 'Sudan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'se','name' => 'Sweden', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sg','name' => 'Singapore', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sh','name' => 'Saint Helena', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	$countryId = Uuid::generate();
    	DB::table('set_countries')->insert(array('id' => $countryId, 'code' => 'si','name' => 'Slovenia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sj','name' => 'Svalbard and Jan Mayen Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sk','name' => 'Slovak Republic', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sl','name' => 'Sierra Leone', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sm','name' => 'San Marino', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sn','name' => 'Senegal', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'so','name' => 'Somalia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sr','name' => 'Suriname', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'st','name' => 'Saint Tome (Sao Tome) and Principe', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'su','name' => 'Former USSR', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sv','name' => 'El Salvador', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sy','name' => 'Syria', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'sz','name' => 'Swaziland', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tc','name' => 'Turks and Caicos Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'td','name' => 'Chad', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tf','name' => 'French Southern Territories', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tg','name' => 'Togo', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'th','name' => 'Thailand', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tj','name' => 'Tadjikistan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tk','name' => 'Tokelau', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tm','name' => 'Turkmenistan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tn','name' => 'Tunisia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'to','name' => 'Tonga', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tp','name' => 'East Timor', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tr','name' => 'Turkey', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tt','name' => 'Trinidad and Tobago', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tv','name' => 'Tuvalu', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tw','name' => 'Taiwan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'tz','name' => 'Tanzania', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ua','name' => 'Ukraine', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ug','name' => 'Uganda', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'uk','name' => 'United Kingdom', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'um','name' => 'USA Minor Outlying Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'us','name' => 'United States', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'uy','name' => 'Uruguay', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'uz','name' => 'Uzbekistan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'va','name' => 'Vatican City State', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'vc','name' => 'Saint Vincent & Grenadines', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 've','name' => 'Venezuela', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'vg','name' => 'Virgin Islands (British)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'vi','name' => 'Virgin Islands (USA)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'vn','name' => 'Vietnam', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'vu','name' => 'Vanuatu', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'wf','name' => 'Wallis and Futuna Islands', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ws','name' => 'Samoa', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'ye','name' => 'Yemen', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'yt','name' => 'Mayotte', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'yu','name' => 'Yugoslavia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'za','name' => 'South Africa', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'zm','name' => 'Zambia', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'zr','name' => 'Zaire', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	DB::table('set_countries')->insert(array('id' => Uuid::generate(), 'code' => 'zw','name' => 'Zimbabwe', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	
    	DB::table('set_users')->insert(array('id' => Uuid::generate(), 'name' => 'Admin','surname' => 'Admin', 'email' => 'bojan.kraut@alcyone.si', 'password' => '$2y$10$OAdtTiASPKHLX8G80BaKA.qs35DiAbLOqSRocNJFPsMY0OCGDPmyS', 'active' => '1','isAdmin' => '1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
    	
    	$catalgueTypeId = Uuid::generate();
    		
    	DB::table('set_cataloguetypes')->insert(array(
    		'id' => $catalgueTypeId,
    		'name' => 'AR Book',
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' => date('Y-m-d H:i:s'))
    	);
    	
    	$postalCodeId = Uuid::generate();
    	
    	DB::table('set_postalcodes')->insert(array(
    		'id' => $postalCodeId,
    		'code' => '2000',
    		'name' => 'Maribor',
    		'country_id' => $countryId,
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' => date('Y-m-d H:i:s'))
    	);
    	
    	$publisherId = Uuid::generate();
    	
    	DB::table('set_publishers')->insert(array(
    		'id' => $publisherId,
    		'short_name' => 'Alcyone d.o.o.',
    		'long_name' => 'Alcyone d.o.o., družba za informacijske sisteme in storitve, d.o.o.',
    		'email' => 'bojan.kraut@alcyone.si',
    		'password' => '$2y$10$OAdtTiASPKHLX8G80BaKA.qs35DiAbLOqSRocNJFPsMY0OCGDPmyS',
    		'vatid' => 'SI4756778',
    		'companyid' => '54354656',
    		'postalcode_id' => $postalCodeId,
    		'active' => true,
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' => date('Y-m-d H:i:s'))
    	);
    		
    	DB::table('set_catalogues')->insert(array(
    			'id' => Uuid::generate(), 
    			'name' => 'Default Catalogue',
    			'publisher_id' => $publisherId, 
    			'cataloguetype_id' => $catalgueTypeId, 
    			'created_at' => date('Y-m-d H:i:s'), 
    			'updated_at' => date('Y-m-d H:i:s'))
    	);
    	
    }
}
