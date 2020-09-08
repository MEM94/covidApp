<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'id'         => 1,
                'name'       => 'Afghanistan',
            ],
            [
                'id'         => 2,
                'name'       => 'Albania',
            ],
            [
                'id'         => 3,
                'name'       => 'Algeria',
            ],
            [
                'id'         => 4,
                'name'       => 'American Samoa',
            ],
            [
                'id'         => 5,
                'name'       => 'Andorra',
            ],
            [
                'id'         => 6,
                'name'       => 'Angola',
            ],
            [
                'id'         => 7,
                'name'       => 'Anguilla',
            ],
            [
                'id'         => 8,
                'name'       => 'Antarctica',
            ],
            [
                'id'         => 9,
                'name'       => 'Antigua and Barbuda',
            ],
            [
                'id'         => 10,
                'name'       => 'Argentina',
            ],
            [
                'id'         => 11,
                'name'       => 'Armenia',
            ],
            [
                'id'         => 12,
                'name'       => 'Aruba',
            ],
            [
                'id'         => 13,
                'name'       => 'Australia',
            ],
            [
                'id'         => 14,
                'name'       => 'Austria',
            ],
            [
                'id'         => 15,
                'name'       => 'Azerbaijan',
            ],
            [
                'id'         => 16,
                'name'       => 'Bahamas',
            ],
            [
                'id'         => 17,
                'name'       => 'Bahrain',
            ],
            [
                'id'         => 18,
                'name'       => 'Bangladesh',
            ],
            [
                'id'         => 19,
                'name'       => 'Barbados',
            ],
            [
                'id'         => 20,
                'name'       => 'Belarus',
            ],
            [
                'id'         => 21,
                'name'       => 'Belgium',
            ],
            [
                'id'         => 22,
                'name'       => 'Belize',
            ],
            [
                'id'         => 23,
                'name'       => 'Benin',
            ],
            [
                'id'         => 24,
                'name'       => 'Bermuda',
            ],
            [
                'id'         => 25,
                'name'       => 'Bhutan',
            ],
            [
                'id'         => 26,
                'name'       => 'Bolivia',
            ],
            [
                'id'         => 27,
                'name'       => 'Bosnia and Herzegovina',
            ],
            [
                'id'         => 28,
                'name'       => 'Botswana',
            ],
            [
                'id'         => 29,
                'name'       => 'Brazil',
            ],
            [
                'id'         => 30,
                'name'       => 'British Indian Ocean Territory',
            ],
            [
                'id'         => 31,
                'name'       => 'British Virgin Islands',
            ],
            [
                'id'         => 32,
                'name'       => 'Brunei',
            ],
            [
                'id'         => 33,
                'name'       => 'Bulgaria',
            ],
            [
                'id'         => 34,
                'name'       => 'Burkina Faso',
            ],
            [
                'id'         => 35,
                'name'       => 'Burundi',
            ],
            [
                'id'         => 36,
                'name'       => 'Cambodia',
            ],
            [
                'id'         => 37,
                'name'       => 'Cameroon',
            ],
            [
                'id'         => 38,
                'name'       => 'Canada',
            ],
            [
                'id'         => 39,
                'name'       => 'Cape Verde',
            ],
            [
                'id'         => 40,
                'name'       => 'Cayman Islands',
            ],
            [
                'id'         => 41,
                'name'       => 'Central African Republic',
            ],
            [
                'id'         => 42,
                'name'       => 'Chad',
            ],
            [
                'id'         => 43,
                'name'       => 'Chile',
            ],
            [
                'id'         => 44,
                'name'       => 'China',
            ],
            [
                'id'         => 45,
                'name'       => 'Christmas Island',
            ],
            [
                'id'         => 46,
                'name'       => 'Cocos Islands',
            ],
            [
                'id'         => 47,
                'name'       => 'Colombia',
            ],
            [
                'id'         => 48,
                'name'       => 'Comoros',
            ],
            [
                'id'         => 49,
                'name'       => 'Cook Islands',
            ],
            [
                'id'         => 50,
                'name'       => 'Costa Rica',
            ],
            [
                'id'         => 51,
                'name'       => 'Croatia',
            ],
            [
                'id'         => 52,
                'name'       => 'Cuba',
            ],
            [
                'id'         => 53,
                'name'       => 'Curacao',
            ],
            [
                'id'         => 54,
                'name'       => 'Cyprus',
            ],
            [
                'id'         => 55,
                'name'       => 'Czech Republic',
            ],
            [
                'id'         => 56,
                'name'       => 'Democratic Republic of the Congo',
            ],
            [
                'id'         => 57,
                'name'       => 'Denmark',
            ],
            [
                'id'         => 58,
                'name'       => 'Djibouti',
            ],
            [
                'id'         => 59,
                'name'       => 'Dominica',
            ],
            [
                'id'         => 60,
                'name'       => 'Dominican Republic',
            ],
            [
                'id'         => 61,
                'name'       => 'East Timor',
            ],
            [
                'id'         => 62,
                'name'       => 'Ecuador',
            ],
            [
                'id'         => 63,
                'name'       => 'Egypt',
            ],
            [
                'id'         => 64,
                'name'       => 'El Salvador',
            ],
            [
                'id'         => 65,
                'name'       => 'Equatorial Guinea',
            ],
            [
                'id'         => 66,
                'name'       => 'Eritrea',
            ],
            [
                'id'         => 67,
                'name'       => 'Estonia',
            ],
            [
                'id'         => 68,
                'name'       => 'Ethiopia',
            ],
            [
                'id'         => 69,
                'name'       => 'Falkland Islands',
            ],
            [
                'id'         => 70,
                'name'       => 'Faroe Islands',
            ],
            [
                'id'         => 71,
                'name'       => 'Fiji',
            ],
            [
                'id'         => 72,
                'name'       => 'Finland',
            ],
            [
                'id'         => 73,
                'name'       => 'France',
            ],
            [
                'id'         => 74,
                'name'       => 'French Polynesia',
            ],
            [
                'id'         => 75,
                'name'       => 'Gabon',
            ],
            [
                'id'         => 76,
                'name'       => 'Gambia',
            ],
            [
                'id'         => 77,
                'name'       => 'Georgia',
            ],
            [
                'id'         => 78,
                'name'       => 'Germany',
            ],
            [
                'id'         => 79,
                'name'       => 'Ghana',
            ],
            [
                'id'         => 80,
                'name'       => 'Gibraltar',
            ],
            [
                'id'         => 81,
                'name'       => 'Greece',
            ],
            [
                'id'         => 82,
                'name'       => 'Greenland',
            ],
            [
                'id'         => 83,
                'name'       => 'Grenada',
            ],
            [
                'id'         => 84,
                'name'       => 'Guam',
            ],
            [
                'id'         => 85,
                'name'       => 'Guatemala',
            ],
            [
                'id'         => 86,
                'name'       => 'Guernsey',
            ],
            [
                'id'         => 87,
                'name'       => 'Guinea',
            ],
            [
                'id'         => 88,
                'name'       => 'Guinea-Bissau',
            ],
            [
                'id'         => 89,
                'name'       => 'Guyana',
            ],
            [
                'id'         => 90,
                'name'       => 'Haiti',
            ],
            [
                'id'         => 91,
                'name'       => 'Honduras',
            ],
            [
                'id'         => 92,
                'name'       => 'Hong Kong',
            ],
            [
                'id'         => 93,
                'name'       => 'Hungary',
            ],
            [
                'id'         => 94,
                'name'       => 'Iceland',
            ],
            [
                'id'         => 95,
                'name'       => 'India',
            ],
            [
                'id'         => 96,
                'name'       => 'Indonesia',
            ],
            [
                'id'         => 97,
                'name'       => 'Iran',
            ],
            [
                'id'         => 98,
                'name'       => 'Iraq',
            ],
            [
                'id'         => 99,
                'name'       => 'Ireland',
            ],
            [
                'id'         => 100,
                'name'       => 'Isle of Man',
            ],
            [
                'id'         => 101,
                'name'       => 'Israel',
            ],
            [
                'id'         => 102,
                'name'       => 'Italy',
            ],
            [
                'id'         => 103,
                'name'       => 'Ivory Coast',
            ],
            [
                'id'         => 104,
                'name'       => 'Jamaica',
            ],
            [
                'id'         => 105,
                'name'       => 'Japan',
            ],
            [
                'id'         => 106,
                'name'       => 'Jersey',
            ],
            [
                'id'         => 107,
                'name'       => 'Jordan',
            ],
            [
                'id'         => 108,
                'name'       => 'Kazakhstan',
            ],
            [
                'id'         => 109,
                'name'       => 'Kenya',
            ],
            [
                'id'         => 110,
                'name'       => 'Kiribati',
            ],
            [
                'id'         => 111,
                'name'       => 'Kosovo',
            ],
            [
                'id'         => 112,
                'name'       => 'Kuwait',
            ],
            [
                'id'         => 113,
                'name'       => 'Kyrgyzstan',
            ],
            [
                'id'         => 114,
                'name'       => 'Laos',
            ],
            [
                'id'         => 115,
                'name'       => 'Latvia',
            ],
            [
                'id'         => 116,
                'name'       => 'Lebanon',
            ],
            [
                'id'         => 117,
                'name'       => 'Lesotho',
            ],
            [
                'id'         => 118,
                'name'       => 'Liberia',
            ],
            [
                'id'         => 119,
                'name'       => 'Libya',
            ],
            [
                'id'         => 120,
                'name'       => 'Liechtenstein',
            ],
            [
                'id'         => 121,
                'name'       => 'Lithuania',
            ],
            [
                'id'         => 122,
                'name'       => 'Luxembourg',
            ],
            [
                'id'         => 123,
                'name'       => 'Macau',
            ],
            [
                'id'         => 124,
                'name'       => 'Macedonia',
            ],
            [
                'id'         => 125,
                'name'       => 'Madagascar',
            ],
            [
                'id'         => 126,
                'name'       => 'Malawi',
            ],
            [
                'id'         => 127,
                'name'       => 'Malaysia',
            ],
            [
                'id'         => 128,
                'name'       => 'Maldives',
            ],
            [
                'id'         => 129,
                'name'       => 'Mali',
            ],
            [
                'id'         => 130,
                'name'       => 'Malta',
            ],
            [
                'id'         => 131,
                'name'       => 'Marshall Islands',
            ],
            [
                'id'         => 132,
                'name'       => 'Mauritania',
            ],
            [
                'id'         => 133,
                'name'       => 'Mauritius',
            ],
            [
                'id'         => 134,
                'name'       => 'Mayotte',
            ],
            [
                'id'         => 135,
                'name'       => 'Mexico',
            ],
            [
                'id'         => 136,
                'name'       => 'Micronesia',
            ],
            [
                'id'         => 137,
                'name'       => 'Moldova',
            ],
            [
                'id'         => 138,
                'name'       => 'Monaco',
            ],
            [
                'id'         => 139,
                'name'       => 'Mongolia',
            ],
            [
                'id'         => 140,
                'name'       => 'Montenegro',
            ],
            [
                'id'         => 141,
                'name'       => 'Montserrat',
            ],
            [
                'id'         => 142,
                'name'       => 'Morocco',
            ],
            [
                'id'         => 143,
                'name'       => 'Mozambique',
            ],
            [
                'id'         => 144,
                'name'       => 'Myanmar',
            ],
            [
                'id'         => 145,
                'name'       => 'Namibia',
            ],
            [
                'id'         => 146,
                'name'       => 'Nauru',
            ],
            [
                'id'         => 147,
                'name'       => 'Nepal',
            ],
            [
                'id'         => 148,
                'name'       => 'Netherlands',
            ],
            [
                'id'         => 149,
                'name'       => 'Netherlands Antilles',
            ],
            [
                'id'         => 150,
                'name'       => 'New Caledonia',
            ],
            [
                'id'         => 151,
                'name'       => 'New Zealand',
            ],
            [
                'id'         => 152,
                'name'       => 'Nicaragua',
            ],
            [
                'id'         => 153,
                'name'       => 'Niger',
            ],
            [
                'id'         => 154,
                'name'       => 'Nigeria',
            ],
            [
                'id'         => 155,
                'name'       => 'Niue',
            ],
            [
                'id'         => 156,
                'name'       => 'North Korea',
            ],
            [
                'id'         => 157,
                'name'       => 'Northern Mariana Islands',
            ],
            [
                'id'         => 158,
                'name'       => 'Norway',
            ],
            [
                'id'         => 159,
                'name'       => 'Oman',
            ],
            [
                'id'         => 160,
                'name'       => 'Pakistan',
            ],
            [
                'id'         => 161,
                'name'       => 'Palau',
            ],
            [
                'id'         => 162,
                'name'       => 'Palestine',
            ],
            [
                'id'         => 163,
                'name'       => 'Panama',
            ],
            [
                'id'         => 164,
                'name'       => 'Papua New Guinea',
            ],
            [
                'id'         => 165,
                'name'       => 'Paraguay',
            ],
            [
                'id'         => 166,
                'name'       => 'Peru',
            ],
            [
                'id'         => 167,
                'name'       => 'Philippines',
            ],
            [
                'id'         => 168,
                'name'       => 'Pitcairn',
            ],
            [
                'id'         => 169,
                'name'       => 'Poland',
            ],
            [
                'id'         => 170,
                'name'       => 'Portugal',
            ],
            [
                'id'         => 171,
                'name'       => 'Puerto Rico',
            ],
            [
                'id'         => 172,
                'name'       => 'Qatar',
            ],
            [
                'id'         => 173,
                'name'       => 'Republic of the Congo',
            ],
            [
                'id'         => 174,
                'name'       => 'Reunion',
            ],
            [
                'id'         => 175,
                'name'       => 'Romania',
            ],
            [
                'id'         => 176,
                'name'       => 'Russia',
            ],
            [
                'id'         => 177,
                'name'       => 'Rwanda',
            ],
            [
                'id'         => 178,
                'name'       => 'Saint Barthelemy',
            ],
            [
                'id'         => 179,
                'name'       => 'Saint Helena',
            ],
            [
                'id'         => 180,
                'name'       => 'Saint Kitts and Nevis',
            ],
            [
                'id'         => 181,
                'name'       => 'Saint Lucia',
            ],
            [
                'id'         => 182,
                'name'       => 'Saint Martin',
            ],
            [
                'id'         => 183,
                'name'       => 'Saint Pierre and Miquelon',
            ],
            [
                'id'         => 184,
                'name'       => 'Saint Vincent and the Grenadines',
            ],
            [
                'id'         => 185,
                'name'       => 'Samoa',
            ],
            [
                'id'         => 186,
                'name'       => 'San Marino',
            ],
            [
                'id'         => 187,
                'name'       => 'Sao Tome and Principe',
            ],
            [
                'id'         => 188,
                'name'       => 'Saudi Arabia',
            ],
            [
                'id'         => 189,
                'name'       => 'Senegal',
            ],
            [
                'id'         => 190,
                'name'       => 'Serbia',
            ],
            [
                'id'         => 191,
                'name'       => 'Seychelles',
            ],
            [
                'id'         => 192,
                'name'       => 'Sierra Leone',
            ],
            [
                'id'         => 193,
                'name'       => 'Singapore',
            ],
            [
                'id'         => 194,
                'name'       => 'Sint Maarten',
            ],
            [
                'id'         => 195,
                'name'       => 'Slovakia',
            ],
            [
                'id'         => 196,
                'name'       => 'Slovenia',
            ],
            [
                'id'         => 197,
                'name'       => 'Solomon Islands',
            ],
            [
                'id'         => 198,
                'name'       => 'Somalia',
            ],
            [
                'id'         => 199,
                'name'       => 'South Africa',
            ],
            [
                'id'         => 200,
                'name'       => 'South Korea',
            ],
            [
                'id'         => 201,
                'name'       => 'South Sudan',
            ],
            [
                'id'         => 202,
                'name'       => 'Spain',
            ],
            [
                'id'         => 203,
                'name'       => 'Sri Lanka',
            ],
            [
                'id'         => 204,
                'name'       => 'Sudan',
            ],
            [
                'id'         => 205,
                'name'       => 'Suriname',
            ],
            [
                'id'         => 206,
                'name'       => 'Svalbard and Jan Mayen',
            ],
            [
                'id'         => 207,
                'name'       => 'Swaziland',
            ],
            [
                'id'         => 208,
                'name'       => 'Sweden',
            ],
            [
                'id'         => 209,
                'name'       => 'Switzerland',
            ],
            [
                'id'         => 210,
                'name'       => 'Syria',
            ],
            [
                'id'         => 211,
                'name'       => 'Taiwan',
            ],
            [
                'id'         => 212,
                'name'       => 'Tajikistan',
            ],
            [
                'id'         => 213,
                'name'       => 'Tanzania',
            ],
            [
                'id'         => 214,
                'name'       => 'Thailand',
            ],
            [
                'id'         => 215,
                'name'       => 'Togo',
            ],
            [
                'id'         => 216,
                'name'       => 'Tokelau',
            ],
            [
                'id'         => 217,
                'name'       => 'Tonga',
            ],
            [
                'id'         => 218,
                'name'       => 'Trinidad and Tobago',
            ],
            [
                'id'         => 219,
                'name'       => 'Tunisia',
            ],
            [
                'id'         => 220,
                'name'       => 'Turkey',
            ],
            [
                'id'         => 221,
                'name'       => 'Turkmenistan',
            ],
            [
                'id'         => 222,
                'name'       => 'Turks and Caicos Islands',
            ],
            [
                'id'         => 223,
                'name'       => 'Tuvalu',
            ],
            [
                'id'         => 224,
                'name'       => 'U.S. Virgin Islands',
            ],
            [
                'id'         => 225,
                'name'       => 'Uganda',
            ],
            [
                'id'         => 226,
                'name'       => 'Ukraine',
            ],
            [
                'id'         => 227,
                'name'       => 'United Arab Emirates',
            ],
            [
                'id'         => 228,
                'name'       => 'United Kingdom',
            ],
            [
                'id'         => 229,
                'name'       => 'United States',
            ],
            [
                'id'         => 230,
                'name'       => 'Uruguay',
            ],
            [
                'id'         => 231,
                'name'       => 'Uzbekistan',
            ],
            [
                'id'         => 232,
                'name'       => 'Vanuatu',
            ],
            [
                'id'         => 233,
                'name'       => 'Vatican',
            ],
            [
                'id'         => 234,
                'name'       => 'Venezuela',
            ],
            [
                'id'         => 235,
                'name'       => 'Vietnam',
            ],
            [
                'id'         => 236,
                'name'       => 'Wallis and Futuna',
            ],
            [
                'id'         => 237,
                'name'       => 'Western Sahara',
            ],
            [
                'id'         => 238,
                'name'       => 'Yemen',
            ],
            [
                'id'         => 239,
                'name'       => 'Zambia',
            ],
            [
                'id'         => 240,
                'name'       => 'Zimbabwe',
            ],
        ];
        Country::insert($countries);
    }
}
