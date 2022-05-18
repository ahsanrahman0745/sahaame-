<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\locations;
class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        locations::truncate();
        $list_of_cities=[
            [
              "country"=> "Pakistan","country_code"=> "PK",
              "city"=> "Abbottabad",
              "latitude"=> "34.1463",
              "longitude"=> "73.21168" ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Adilpur",
                    "latitude"=> "27.93677",
                    "longitude"=> "69.31941"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ahmadpur East",
                    "latitude"=> "29.14269",
                    "longitude"=> "71.25771"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ahmadpur Sial",
                    "latitude"=> "30.67791",
                    "longitude"=> "71.74344"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Akora",
                    "latitude"=> "34.00337",
                    "longitude"=> "72.12561"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Aliabad",
                    "latitude"=> "36.30703",
                    "longitude"=> "74.61545"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Alik Ghund",
                    "latitude"=> "30.48976",
                    "longitude"=> "67.52177"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Alipur",
                    "latitude"=> "29.38242",
                    "longitude"=> "70.91106"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Alizai",
                    "latitude"=> "33.53613",
                    "longitude"=> "70.34607"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Alpurai",
                    "latitude"=> "34.92039",
                    "longitude"=> "72.63265"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Aman Garh",
                    "latitude"=> "34.00584",
                    "longitude"=> "71.92971"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Amirabad",
                    "latitude"=> "34.18729",
                    "longitude"=> "73.09078"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Arifwala",
                    "latitude"=> "30.29058",
                    "longitude"=> "73.06574"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ashanagro Koto",
                    "latitude"=> "34.10773",
                    "longitude"=> "72.24517"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Athmuqam",
                    "latitude"=> "34.57173",
                    "longitude"=> "73.89724"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Attock City",
                    "latitude"=> "33.76671",
                    "longitude"=> "72.35977"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Awaran",
                    "latitude"=> "26.45677",
                    "longitude"=> "65.23144"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Baddomalhi",
                    "latitude"=> "31.99042",
                    "longitude"=> "74.6641"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Badin",
                    "latitude"=> "24.656",
                    "longitude"=> "68.837"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Baffa",
                    "latitude"=> "34.4377",
                    "longitude"=> "73.22368"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bagarji",
                    "latitude"=> "27.75431",
                    "longitude"=> "68.75866"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bagh",
                    "latitude"=> "33.98111",
                    "longitude"=> "73.77608"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bahawalnagar",
                    "latitude"=> "29.99835",
                    "longitude"=> "73.25272"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bahawalnagar",
                    "latitude"=> "30.55083",
                    "longitude"=> "73.39083"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bahawalpur",
                    "latitude"=> "29.39779",
                    "longitude"=> "71.6752"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bakhri Ahmad Khan",
                    "latitude"=> "30.73586",
                    "longitude"=> "70.83796"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bandhi",
                    "latitude"=> "26.58761",
                    "longitude"=> "68.30215"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bannu",
                    "latitude"=> "32.98527",
                    "longitude"=> "70.60403"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Barishal",
                    "latitude"=> "36.32162",
                    "longitude"=> "74.69502"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Barkhan",
                    "latitude"=> "29.89773",
                    "longitude"=> "69.52558"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Basirpur",
                    "latitude"=> "30.57759",
                    "longitude"=> "73.83912"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Basti Dosa",
                    "latitude"=> "30.78769",
                    "longitude"=> "70.86853"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bat Khela",
                    "latitude"=> "34.6178",
                    "longitude"=> "71.97247"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Battagram",
                    "latitude"=> "34.67719",
                    "longitude"=> "73.02329"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Begowala",
                    "latitude"=> "32.43816",
                    "longitude"=> "74.26794"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bela",
                    "latitude"=> "26.22718",
                    "longitude"=> "66.31178"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Berani",
                    "latitude"=> "25.78497",
                    "longitude"=> "68.80754"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bhag",
                    "latitude"=> "29.04174",
                    "longitude"=> "67.82394"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bhakkar",
                    "latitude"=> "31.62685",
                    "longitude"=> "71.06471"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bhalwal",
                    "latitude"=> "32.26576",
                    "longitude"=> "72.89809"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bhan",
                    "latitude"=> "26.55831",
                    "longitude"=> "67.72139"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bhawana",
                    "latitude"=> "31.56884",
                    "longitude"=> "72.64917"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bhera",
                    "latitude"=> "32.48206",
                    "longitude"=> "72.90865"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bhimbar",
                    "latitude"=> "32.97465",
                    "longitude"=> "74.07846"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bhiria",
                    "latitude"=> "26.91041",
                    "longitude"=> "68.19466"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bhit Shah",
                    "latitude"=> "25.80565",
                    "longitude"=> "68.49143"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bhopalwala",
                    "latitude"=> "32.42968",
                    "longitude"=> "74.3635"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bozdar Wada",
                    "latitude"=> "27.183",
                    "longitude"=> "68.6358"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Bulri",
                    "latitude"=> "24.86667",
                    "longitude"=> "68.33333"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Būrewāla",
                    "latitude"=> "30.16667",
                    "longitude"=> "72.65"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chak",
                    "latitude"=> "27.85838",
                    "longitude"=> "68.83378"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chak Azam Sahu",
                    "latitude"=> "30.75202",
                    "longitude"=> "73.02834"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chak Five Hundred Seventy-five",
                    "latitude"=> "31.54514",
                    "longitude"=> "73.82891"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chak Jhumra",
                    "latitude"=> "31.56808",
                    "longitude"=> "73.18317"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chak One Hundred Twenty Nine Left",
                    "latitude"=> "30.42919",
                    "longitude"=> "73.04522"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chak Thirty-one -Eleven Left",
                    "latitude"=> "30.42388",
                    "longitude"=> "72.69737"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chak Two Hundred Forty-nine Thal Development Authority",
                    "latitude"=> "31.17772",
                    "longitude"=> "71.2048"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chakwal",
                    "latitude"=> "32.93286",
                    "longitude"=> "72.85394"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chaman",
                    "latitude"=> "30.91769",
                    "longitude"=> "66.45259"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chamber",
                    "latitude"=> "25.29362",
                    "longitude"=> "68.81176"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Charsadda",
                    "latitude"=> "34.14822",
                    "longitude"=> "71.7406"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chawinda",
                    "latitude"=> "32.34434",
                    "longitude"=> "74.70507"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chenab Nagar",
                    "latitude"=> "31.75511",
                    "longitude"=> "72.91403"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Cherat Cantonement",
                    "latitude"=> "33.82342",
                    "longitude"=> "71.89292"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chhor",
                    "latitude"=> "25.5126",
                    "longitude"=> "69.78437"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chichawatni",
                    "latitude"=> "30.5301",
                    "longitude"=> "72.69155"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chilas",
                    "latitude"=> "35.41287",
                    "longitude"=> "74.10407"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chiniot",
                    "latitude"=> "31.72091",
                    "longitude"=> "72.97836"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chishtian",
                    "latitude"=> "29.79713",
                    "longitude"=> "72.85772"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chitral",
                    "latitude"=> "35.8518",
                    "longitude"=> "71.78636"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Choa Saidan Shah",
                    "latitude"=> "32.71962",
                    "longitude"=> "72.98625"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chowki Jamali",
                    "latitude"=> "28.01944",
                    "longitude"=> "67.92083"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chuchar-kana Mandi",
                    "latitude"=> "31.75",
                    "longitude"=> "73.8"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chuhar Jamali",
                    "latitude"=> "24.3944",
                    "longitude"=> "67.99298"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Chunian",
                    "latitude"=> "30.96621",
                    "longitude"=> "73.97908"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dadhar",
                    "latitude"=> "29.47489",
                    "longitude"=> "67.65167"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dadu",
                    "latitude"=> "26.73033",
                    "longitude"=> "67.7769"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Daggar",
                    "latitude"=> "34.51106",
                    "longitude"=> "72.48438"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Daira Din Panah",
                    "latitude"=> "30.57053",
                    "longitude"=> "70.93722"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dajal",
                    "latitude"=> "29.55769",
                    "longitude"=> "70.37614"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dalbandin",
                    "latitude"=> "28.88846",
                    "longitude"=> "64.40616"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dandot RS",
                    "latitude"=> "32.64167",
                    "longitude"=> "72.975"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Daromehar",
                    "latitude"=> "24.79382",
                    "longitude"=> "68.17978"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Darya Khan",
                    "latitude"=> "31.78447",
                    "longitude"=> "71.10197"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Darya Khan Marri",
                    "latitude"=> "26.67765",
                    "longitude"=> "68.28666"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Daska Kalan",
                    "latitude"=> "32.32422",
                    "longitude"=> "74.35039"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dasu",
                    "latitude"=> "35.29169",
                    "longitude"=> "73.2906"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Daud Khel",
                    "latitude"=> "32.87533",
                    "longitude"=> "71.57118"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Daulatpur",
                    "latitude"=> "26.50158",
                    "longitude"=> "67.97079"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Daultala",
                    "latitude"=> "33.19282",
                    "longitude"=> "73.14099"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Daur",
                    "latitude"=> "26.45528",
                    "longitude"=> "68.31835"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dera Allahyar",
                    "latitude"=> "28.37353",
                    "longitude"=> "68.35078"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dera Bugti",
                    "latitude"=> "29.03619",
                    "longitude"=> "69.15849"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dera Ghazi Khan",
                    "latitude"=> "30.04587",
                    "longitude"=> "70.64029"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dera Ismail Khan",
                    "latitude"=> "31.83129",
                    "longitude"=> "70.9017"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dera Murad Jamali",
                    "latitude"=> "28.54657",
                    "longitude"=> "68.22308"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dhanot",
                    "latitude"=> "29.57991",
                    "longitude"=> "71.75213"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dhaunkal",
                    "latitude"=> "32.40613",
                    "longitude"=> "74.13706"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dhoro Naro",
                    "latitude"=> "25.50484",
                    "longitude"=> "69.5709"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Digri",
                    "latitude"=> "25.15657",
                    "longitude"=> "69.11098"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dijkot",
                    "latitude"=> "31.21735",
                    "longitude"=> "72.99621"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dinan Bashnoian Wala",
                    "latitude"=> "29.76584",
                    "longitude"=> "73.26557"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dinga",
                    "latitude"=> "32.64101",
                    "longitude"=> "73.72039"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dipalpur",
                    "latitude"=> "30.66984",
                    "longitude"=> "73.65306"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Diplo",
                    "latitude"=> "24.46688",
                    "longitude"=> "69.58114"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Doaba",
                    "latitude"=> "33.4245",
                    "longitude"=> "70.73676"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dokri",
                    "latitude"=> "27.37421",
                    "longitude"=> "68.09715"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Duki",
                    "latitude"=> "30.15307",
                    "longitude"=> "68.57323"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dullewala",
                    "latitude"=> "31.83439",
                    "longitude"=> "71.43639"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dunga Bunga",
                    "latitude"=> "29.74975",
                    "longitude"=> "73.24294"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Dunyapur",
                    "latitude"=> "29.80275",
                    "longitude"=> "71.74344"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Eidgah",
                    "latitude"=> "35.34712",
                    "longitude"=> "74.85632"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Eminabad",
                    "latitude"=> "32.04237",
                    "longitude"=> "74.25996"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Faisalabad",
                    "latitude"=> "31.41554",
                    "longitude"=> "73.08969"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Faqirwali",
                    "latitude"=> "29.46799",
                    "longitude"=> "73.03489"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Faruka",
                    "latitude"=> "31.88642",
                    "longitude"=> "72.41362"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Fazilpur",
                    "latitude"=> "32.17629",
                    "longitude"=> "75.06583"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Fort Abbas",
                    "latitude"=> "29.19344",
                    "longitude"=> "72.85525"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gadani",
                    "latitude"=> "25.11853",
                    "longitude"=> "66.72985"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gakuch",
                    "latitude"=> "36.17683",
                    "longitude"=> "73.76383"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gambat",
                    "latitude"=> "27.3517",
                    "longitude"=> "68.5215"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gandava",
                    "latitude"=> "28.61321",
                    "longitude"=> "67.48564"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Garh Maharaja",
                    "latitude"=> "30.83383",
                    "longitude"=> "71.90491"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Garhi Khairo",
                    "latitude"=> "28.06029",
                    "longitude"=> "67.98033"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Garhiyasin",
                    "latitude"=> "27.90631",
                    "longitude"=> "68.5121"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gharo",
                    "latitude"=> "24.74182",
                    "longitude"=> "67.58534"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ghauspur",
                    "latitude"=> "28.13882",
                    "longitude"=> "69.08245"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ghotki",
                    "latitude"=> "28.00437",
                    "longitude"=> "69.31569"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gilgit",
                    "latitude"=> "35.91869",
                    "longitude"=> "74.31245"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gojra",
                    "latitude"=> "31.14926",
                    "longitude"=> "72.68323"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Goth Garelo",
                    "latitude"=> "27.43521",
                    "longitude"=> "68.07572"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Goth Phulji",
                    "latitude"=> "26.88099",
                    "longitude"=> "67.68239"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Goth Radhan",
                    "latitude"=> "27.19846",
                    "longitude"=> "67.95348"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gujar Khan",
                    "latitude"=> "33.25411",
                    "longitude"=> "73.30433"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gujranwala",
                    "latitude"=> "32.15567",
                    "longitude"=> "74.18705"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gujrat",
                    "latitude"=> "32.5742",
                    "longitude"=> "74.07542"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gulishah Kach",
                    "latitude"=> "32.67087",
                    "longitude"=> "70.33917"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Gwadar",
                    "latitude"=> "25.12163",
                    "longitude"=> "62.32541"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Hadali",
                    "latitude"=> "32.64043",
                    "longitude"=> "74.56898"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Hafizabad",
                    "latitude"=> "32.07095",
                    "longitude"=> "73.68802"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Hala",
                    "latitude"=> "25.81459",
                    "longitude"=> "68.42198"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Hangu",
                    "latitude"=> "33.53198",
                    "longitude"=> "71.0595"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Haripur",
                    "latitude"=> "33.99783",
                    "longitude"=> "72.93493"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Harnai",
                    "latitude"=> "30.10077",
                    "longitude"=> "67.93824"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Harnoli",
                    "latitude"=> "32.27871",
                    "longitude"=> "71.55429"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Harunabad",
                    "latitude"=> "29.61206",
                    "longitude"=> "73.13802"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Hasilpur",
                    "latitude"=> "29.69221",
                    "longitude"=> "72.54566"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Hattian Bala",
                    "latitude"=> "34.1691",
                    "longitude"=> "73.7432"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Haveli Lakha",
                    "latitude"=> "30.45097",
                    "longitude"=> "73.69371"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Havelian",
                    "latitude"=> "34.05348",
                    "longitude"=> "73.15993"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Hazro City",
                    "latitude"=> "33.9099",
                    "longitude"=> "72.49179"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Hingorja",
                    "latitude"=> "27.21088",
                    "longitude"=> "68.41598"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Hujra Shah Muqim",
                    "latitude"=> "30.74168",
                    "longitude"=> "73.82327"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Hyderabad",
                    "latitude"=> "25.39242",
                    "longitude"=> "68.37366"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Islamabad",
                    "latitude"=> "33.72148",
                    "longitude"=> "73.04329"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Islamkot",
                    "latitude"=> "24.69904",
                    "longitude"=> "70.17982"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jacobabad",
                    "latitude"=> "28.28187",
                    "longitude"=> "68.43761"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jahanian Shah",
                    "latitude"=> "31.80541",
                    "longitude"=> "72.2774"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jalalpur Jattan",
                    "latitude"=> "32.64118",
                    "longitude"=> "74.20561"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jalalpur Pirwala",
                    "latitude"=> "29.5051",
                    "longitude"=> "71.22202"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jampur",
                    "latitude"=> "29.64235",
                    "longitude"=> "70.59518"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jamshoro",
                    "latitude"=> "25.43608",
                    "longitude"=> "68.28017"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jand",
                    "latitude"=> "33.43304",
                    "longitude"=> "72.01877"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jandiala Sher Khan",
                    "latitude"=> "31.82098",
                    "longitude"=> "73.91815"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jaranwala",
                    "latitude"=> "31.3332",
                    "longitude"=> "73.41868"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jati",
                    "latitude"=> "24.35492",
                    "longitude"=> "68.26732"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jatoi Shimali",
                    "latitude"=> "29.51827",
                    "longitude"=> "70.84474"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jauharabad",
                    "latitude"=> "32.29016",
                    "longitude"=> "72.28182"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jhang City",
                    "latitude"=> "31.30568",
                    "longitude"=> "72.32594"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jhang Sadr",
                    "latitude"=> "31.26981",
                    "longitude"=> "72.31687"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jhawarian",
                    "latitude"=> "32.36192",
                    "longitude"=> "72.62275"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jhelum",
                    "latitude"=> "32.93448",
                    "longitude"=> "73.73102"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jhol",
                    "latitude"=> "25.95533",
                    "longitude"=> "68.88871"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jiwani",
                    "latitude"=> "25.04852",
                    "longitude"=> "61.74573"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Johi",
                    "latitude"=> "26.69225",
                    "longitude"=> "67.61431"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Jām Sāhib",
                    "latitude"=> "26.29583",
                    "longitude"=> "68.62917"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kabirwala",
                    "latitude"=> "30.40472",
                    "longitude"=> "71.86269"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kadhan",
                    "latitude"=> "24.48041",
                    "longitude"=> "68.98551"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kahna Nau",
                    "latitude"=> "31.36709",
                    "longitude"=> "74.36899"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kahror Pakka",
                    "latitude"=> "29.6243",
                    "longitude"=> "71.91437"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kahuta",
                    "latitude"=> "33.59183",
                    "longitude"=> "73.38736"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kakad Wari Dir Upper",
                    "latitude"=> "34.99798",
                    "longitude"=> "72.07295"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kalabagh",
                    "latitude"=> "32.96164",
                    "longitude"=> "71.54638"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kalaswala",
                    "latitude"=> "32.20081",
                    "longitude"=> "74.64858"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kalat",
                    "latitude"=> "29.02663",
                    "longitude"=> "66.59361"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kaleke Mandi",
                    "latitude"=> "31.97597",
                    "longitude"=> "73.59999"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kallar Kahar",
                    "latitude"=> "32.77998",
                    "longitude"=> "72.69793"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kalur Kot",
                    "latitude"=> "32.15512",
                    "longitude"=> "71.26631"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kamalia",
                    "latitude"=> "30.72708",
                    "longitude"=> "72.64607"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kamar Mushani",
                    "latitude"=> "32.84318",
                    "longitude"=> "71.36192"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kambar",
                    "latitude"=> "27.58753",
                    "longitude"=> "68.00066"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kamoke",
                    "latitude"=> "31.97526",
                    "longitude"=> "74.22304"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kamra",
                    "latitude"=> "33.74698",
                    "longitude"=> "73.51229"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kandhkot",
                    "latitude"=> "28.24574",
                    "longitude"=> "69.17974"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kandiari",
                    "latitude"=> "26.9155",
                    "longitude"=> "68.52193"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kandiaro",
                    "latitude"=> "27.05918",
                    "longitude"=> "68.21022"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kanganpur",
                    "latitude"=> "30.76468",
                    "longitude"=> "74.12286"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Karachi",
                    "latitude"=> "24.8608",
                    "longitude"=> "67.0104"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Karak",
                    "latitude"=> "33.11633",
                    "longitude"=> "71.09354"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Karaundi",
                    "latitude"=> "26.89709",
                    "longitude"=> "68.40643"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kario Ghanwar",
                    "latitude"=> "24.80817",
                    "longitude"=> "68.60483"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Karor",
                    "latitude"=> "31.2246",
                    "longitude"=> "70.95153"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kashmor",
                    "latitude"=> "28.4326",
                    "longitude"=> "69.58364"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kasur",
                    "latitude"=> "31.11866",
                    "longitude"=> "74.45025"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Keshupur",
                    "latitude"=> "32.26",
                    "longitude"=> "72.5"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Keti Bandar",
                    "latitude"=> "24.14422",
                    "longitude"=> "67.45094"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khadan Khak",
                    "latitude"=> "30.75236",
                    "longitude"=> "67.71133"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khadro",
                    "latitude"=> "26.14713",
                    "longitude"=> "68.71777"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khairpur",
                    "latitude"=> "28.06437",
                    "longitude"=> "69.70363"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khairpur Mir’s",
                    "latitude"=> "27.52948",
                    "longitude"=> "68.75915"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khairpur Nathan Shah",
                    "latitude"=> "27.09064",
                    "longitude"=> "67.73489"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khairpur Tamewah",
                    "latitude"=> "29.58139",
                    "longitude"=> "72.23804"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khalabat",
                    "latitude"=> "34.05997",
                    "longitude"=> "72.88963"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khandowa",
                    "latitude"=> "32.74255",
                    "longitude"=> "72.73478"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khanewal",
                    "latitude"=> "30.30173",
                    "longitude"=> "71.93212"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khangah Dogran",
                    "latitude"=> "31.83294",
                    "longitude"=> "73.62213"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khangarh",
                    "latitude"=> "29.91446",
                    "longitude"=> "71.16067"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khanpur",
                    "latitude"=> "28.64739",
                    "longitude"=> "70.65694"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khanpur Mahar",
                    "latitude"=> "27.84088",
                    "longitude"=> "69.41302"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kharan",
                    "latitude"=> "28.58459",
                    "longitude"=> "65.41501"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kharian",
                    "latitude"=> "32.81612",
                    "longitude"=> "73.88697"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khewra",
                    "latitude"=> "32.6491",
                    "longitude"=> "73.01059"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khurrianwala",
                    "latitude"=> "31.49936",
                    "longitude"=> "73.26763"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khushāb",
                    "latitude"=> "32.29667",
                    "longitude"=> "72.3525"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Khuzdar",
                    "latitude"=> "27.81193",
                    "longitude"=> "66.61096"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kohat",
                    "latitude"=> "33.58196",
                    "longitude"=> "71.44929"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kohlu",
                    "latitude"=> "29.89651",
                    "longitude"=> "69.25324"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kot Addu",
                    "latitude"=> "30.46907",
                    "longitude"=> "70.96699"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kot Diji",
                    "latitude"=> "27.34156",
                    "longitude"=> "68.70821"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kot Ghulam Muhammad",
                    "latitude"=> "32.33311",
                    "longitude"=> "74.54694"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kot Malik Barkhurdar",
                    "latitude"=> "30.20379",
                    "longitude"=> "66.98723"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kot Mumin",
                    "latitude"=> "32.18843",
                    "longitude"=> "73.02987"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kot Radha Kishan",
                    "latitude"=> "31.17068",
                    "longitude"=> "74.10126"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kot Rajkour",
                    "latitude"=> "32.41208",
                    "longitude"=> "74.62855"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kot Samaba",
                    "latitude"=> "28.55207",
                    "longitude"=> "70.46837"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kot Sultan",
                    "latitude"=> "30.7737",
                    "longitude"=> "70.93125"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kotli",
                    "latitude"=> "33.51836",
                    "longitude"=> "73.9022"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kotli Loharan",
                    "latitude"=> "32.58893",
                    "longitude"=> "74.49466"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kotri",
                    "latitude"=> "25.36566",
                    "longitude"=> "68.30831"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kulachi",
                    "latitude"=> "31.93058",
                    "longitude"=> "70.45959"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kundian",
                    "latitude"=> "32.45775",
                    "longitude"=> "71.47892"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kunjah",
                    "latitude"=> "32.52982",
                    "longitude"=> "73.97486"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Kunri",
                    "latitude"=> "25.17874",
                    "longitude"=> "69.56572"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Lachi",
                    "latitude"=> "33.38291",
                    "longitude"=> "71.33733"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ladhewala Waraich",
                    "latitude"=> "32.15692",
                    "longitude"=> "74.11564"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Lahore",
                    "latitude"=> "31.558",
                    "longitude"=> "74.35071"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Lakhi",
                    "latitude"=> "27.84884",
                    "longitude"=> "68.69972"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Lakki",
                    "latitude"=> "32.60724",
                    "longitude"=> "70.91234"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Lala Musa",
                    "latitude"=> "32.70138",
                    "longitude"=> "73.95746"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Lalian",
                    "latitude"=> "31.82462",
                    "longitude"=> "72.80116"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Landi Kotal",
                    "latitude"=> "34.0988",
                    "longitude"=> "71.14108"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Larkana",
                    "latitude"=> "27.55898",
                    "longitude"=> "68.21204"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Layyah",
                    "latitude"=> "30.96128",
                    "longitude"=> "70.93904"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Liliani",
                    "latitude"=> "32.20393",
                    "longitude"=> "72.9512"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Lodhran",
                    "latitude"=> "29.5339",
                    "longitude"=> "71.63244"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Loralai",
                    "latitude"=> "30.37051",
                    "longitude"=> "68.59795"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mach",
                    "latitude"=> "29.86371",
                    "longitude"=> "67.33018"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Madeji",
                    "latitude"=> "27.75314",
                    "longitude"=> "68.45166"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mailsi",
                    "latitude"=> "29.80123",
                    "longitude"=> "72.17398"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Malakand",
                    "latitude"=> "34.56561",
                    "longitude"=> "71.93043"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Malakwal",
                    "latitude"=> "32.55449",
                    "longitude"=> "73.21274"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Malakwal City",
                    "latitude"=> "32.55492",
                    "longitude"=> "73.2122"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Malir Cantonment",
                    "latitude"=> "24.94343",
                    "longitude"=> "67.20591"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mamu Kanjan",
                    "latitude"=> "30.83044",
                    "longitude"=> "72.79943"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mananwala",
                    "latitude"=> "31.58803",
                    "longitude"=> "73.68927"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mandi Bahauddin",
                    "latitude"=> "32.58704",
                    "longitude"=> "73.49123"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mangla",
                    "latitude"=> "31.89306",
                    "longitude"=> "72.38167"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mankera",
                    "latitude"=> "31.38771",
                    "longitude"=> "71.44047"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mansehra",
                    "latitude"=> "34.33023",
                    "longitude"=> "73.19679"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mardan",
                    "latitude"=> "34.19794",
                    "longitude"=> "72.04965"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mastung",
                    "latitude"=> "29.79966",
                    "longitude"=> "66.84553"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Matiari",
                    "latitude"=> "25.59709",
                    "longitude"=> "68.4467"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Matli",
                    "latitude"=> "25.0429",
                    "longitude"=> "68.65591"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mehar",
                    "latitude"=> "27.18027",
                    "longitude"=> "67.82051"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mehmand Chak",
                    "latitude"=> "32.78518",
                    "longitude"=> "73.82306"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mehrabpur",
                    "latitude"=> "28.10773",
                    "longitude"=> "68.02554"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mian Channun",
                    "latitude"=> "30.44067",
                    "longitude"=> "72.35679"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mianke Mor",
                    "latitude"=> "31.2024",
                    "longitude"=> "73.94857"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mianwali",
                    "latitude"=> "32.57756",
                    "longitude"=> "71.52847"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Minchianabad",
                    "latitude"=> "30.16356",
                    "longitude"=> "73.56858"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mingora",
                    "latitude"=> "34.7795",
                    "longitude"=> "72.36265"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Miran Shah",
                    "latitude"=> "33.00059",
                    "longitude"=> "70.07117"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Miro Khan",
                    "latitude"=> "27.75985",
                    "longitude"=> "68.09195"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mirpur Bhtoro",
                    "latitude"=> "24.72852",
                    "longitude"=> "68.2601"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mirpur Khas",
                    "latitude"=> "25.5276",
                    "longitude"=> "69.01255"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mirpur Mathelo",
                    "latitude"=> "28.02136",
                    "longitude"=> "69.54914"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mirpur Sakro",
                    "latitude"=> "24.54692",
                    "longitude"=> "67.62797"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mirwah Gorchani",
                    "latitude"=> "25.30981",
                    "longitude"=> "69.05019"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mitha Tiwana",
                    "latitude"=> "32.2454",
                    "longitude"=> "72.10615"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mithi",
                    "latitude"=> "24.73701",
                    "longitude"=> "69.79707"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Moro",
                    "latitude"=> "26.66317",
                    "longitude"=> "68.00016"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Moza Shahwala",
                    "latitude"=> "30.80563",
                    "longitude"=> "70.84911"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Multan",
                    "latitude"=> "30.19679",
                    "longitude"=> "71.47824"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Muridke",
                    "latitude"=> "31.80258",
                    "longitude"=> "74.25772"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Murree",
                    "latitude"=> "33.90836",
                    "longitude"=> "73.3903"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Musa Khel Bazar",
                    "latitude"=> "30.85944",
                    "longitude"=> "69.82208"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Mustafābād",
                    "latitude"=> "30.89222",
                    "longitude"=> "73.49889"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Muzaffargarh",
                    "latitude"=> "30.07258",
                    "longitude"=> "71.19379"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Muzaffarābād",
                    "latitude"=> "34.37002",
                    "longitude"=> "73.47082"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Nabisar",
                    "latitude"=> "25.06717",
                    "longitude"=> "69.6434"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Nankana Sahib",
                    "latitude"=> "31.4501",
                    "longitude"=> "73.70653"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Narang Mandi",
                    "latitude"=> "31.90376",
                    "longitude"=> "74.51587"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Narowal",
                    "latitude"=> "32.10197",
                    "longitude"=> "74.87303"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Nasirabad",
                    "latitude"=> "27.38137",
                    "longitude"=> "67.91644"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Naudero",
                    "latitude"=> "27.66684",
                    "longitude"=> "68.3609"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Naukot",
                    "latitude"=> "24.85822",
                    "longitude"=> "69.40153"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Naushahra Virkan",
                    "latitude"=> "31.96258",
                    "longitude"=> "73.97117"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Naushahro Firoz",
                    "latitude"=> "26.8401",
                    "longitude"=> "68.12265"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Nawabshah",
                    "latitude"=> "26.23939",
                    "longitude"=> "68.40369"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Nazir Town",
                    "latitude"=> "33.30614",
                    "longitude"=> "73.4833"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "New Bādāh",
                    "latitude"=> "27.34167",
                    "longitude"=> "68.03194"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "New Mirpur",
                    "latitude"=> "33.14782",
                    "longitude"=> "73.75187"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Noorabad",
                    "latitude"=> "34.25195",
                    "longitude"=> "71.96656"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Nowshera",
                    "latitude"=> "34.01583",
                    "longitude"=> "71.98123"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Nowshera Cantonment",
                    "latitude"=> "33.99829",
                    "longitude"=> "71.99834"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Nushki",
                    "latitude"=> "29.55218",
                    "longitude"=> "66.02288"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Okara",
                    "latitude"=> "30.81029",
                    "longitude"=> "73.45155"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ormara",
                    "latitude"=> "25.2088",
                    "longitude"=> "64.6357"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pabbi",
                    "latitude"=> "34.00968",
                    "longitude"=> "71.79445"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pad Idan",
                    "latitude"=> "26.77455",
                    "longitude"=> "68.30094"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Paharpur",
                    "latitude"=> "32.10502",
                    "longitude"=> "70.97055"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pakpattan",
                    "latitude"=> "30.34314",
                    "longitude"=> "73.38944"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Panjgur",
                    "latitude"=> "26.97186",
                    "longitude"=> "64.09459"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pano Aqil",
                    "latitude"=> "27.85619",
                    "longitude"=> "69.11111"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Parachinar",
                    "latitude"=> "33.89968",
                    "longitude"=> "70.10012"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pasni",
                    "latitude"=> "25.26302",
                    "longitude"=> "63.46921"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pasrur",
                    "latitude"=> "32.26286",
                    "longitude"=> "74.66327"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pattoki",
                    "latitude"=> "31.02021",
                    "longitude"=> "73.85333"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Peshawar",
                    "latitude"=> "34.008",
                    "longitude"=> "71.57849"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Phalia",
                    "latitude"=> "32.43104",
                    "longitude"=> "73.579"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pind Dadan Khan",
                    "latitude"=> "32.58662",
                    "longitude"=> "73.04456"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pindi Bhattian",
                    "latitude"=> "31.89844",
                    "longitude"=> "73.27339"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pindi Gheb",
                    "latitude"=> "33.24095",
                    "longitude"=> "72.2648"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pir Jo Goth",
                    "latitude"=> "27.59178",
                    "longitude"=> "68.61848"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pir Mahal",
                    "latitude"=> "30.76663",
                    "longitude"=> "72.43455"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pishin",
                    "latitude"=> "30.58176",
                    "longitude"=> "66.99406"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Pithoro",
                    "latitude"=> "25.51122",
                    "longitude"=> "69.37803"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Qadirpur Ran",
                    "latitude"=> "30.29184",
                    "longitude"=> "71.67164"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Qila Abdullah",
                    "latitude"=> "30.72803",
                    "longitude"=> "66.66117"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Qila Saifullah",
                    "latitude"=> "30.70077",
                    "longitude"=> "68.35984"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Quetta",
                    "latitude"=> "30.18414",
                    "longitude"=> "67.00141"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Rahim Yar Khan",
                    "latitude"=> "28.41987",
                    "longitude"=> "70.30345"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Raiwind",
                    "latitude"=> "31.24895",
                    "longitude"=> "74.21534"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Raja Jang",
                    "latitude"=> "31.22078",
                    "longitude"=> "74.25483"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Rajanpur",
                    "latitude"=> "29.10408",
                    "longitude"=> "70.32969"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Rajo Khanani",
                    "latitude"=> "24.98391",
                    "longitude"=> "68.8537"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ranipur",
                    "latitude"=> "27.2872",
                    "longitude"=> "68.50623"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Rasulnagar",
                    "latitude"=> "32.32794",
                    "longitude"=> "73.7804"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ratodero",
                    "latitude"=> "27.80227",
                    "longitude"=> "68.28902"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Rawala Kot",
                    "latitude"=> "33.85782",
                    "longitude"=> "73.76043"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Rawalpindi",
                    "latitude"=> "33.59733",
                    "longitude"=> "73.0479"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Renala Khurd",
                    "latitude"=> "30.87878",
                    "longitude"=> "73.59857"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Risalpur Cantonment",
                    "latitude"=> "34.06048",
                    "longitude"=> "71.99276"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Rohri",
                    "latitude"=> "27.69203",
                    "longitude"=> "68.89503"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Rojhan",
                    "latitude"=> "28.68735",
                    "longitude"=> "69.9535"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Rustam",
                    "latitude"=> "27.96705",
                    "longitude"=> "68.80386"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Saddiqabad",
                    "latitude"=> "28.3091",
                    "longitude"=> "70.12652"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sahiwal",
                    "latitude"=> "31.97386",
                    "longitude"=> "72.33109"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sahiwal",
                    "latitude"=> "30.66595",
                    "longitude"=> "73.10186"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Saidu Sharif",
                    "latitude"=> "34.74655",
                    "longitude"=> "72.35568"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sakrand",
                    "latitude"=> "26.13845",
                    "longitude"=> "68.27444"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Samaro",
                    "latitude"=> "25.28143",
                    "longitude"=> "69.39623"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sambrial",
                    "latitude"=> "32.47835",
                    "longitude"=> "74.35338"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sanghar",
                    "latitude"=> "26.04694",
                    "longitude"=> "68.94917"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sangla Hill",
                    "latitude"=> "31.71667",
                    "longitude"=> "73.38333"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sanjwal",
                    "latitude"=> "33.76105",
                    "longitude"=> "72.43315"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sann",
                    "latitude"=> "26.0403",
                    "longitude"=> "68.13763"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sarai Alamgir",
                    "latitude"=> "32.90495",
                    "longitude"=> "73.75518"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sarai Naurang",
                    "latitude"=> "32.82581",
                    "longitude"=> "70.78107"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sarai Sidhu",
                    "latitude"=> "30.59476",
                    "longitude"=> "71.9699"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sargodha",
                    "latitude"=> "32.08586",
                    "longitude"=> "72.67418"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sehwan",
                    "latitude"=> "26.42495",
                    "longitude"=> "67.86126"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Setharja Old",
                    "latitude"=> "27.2127",
                    "longitude"=> "68.46883"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shabqadar",
                    "latitude"=> "34.21599",
                    "longitude"=> "71.5548"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shahdad Kot",
                    "latitude"=> "27.84726",
                    "longitude"=> "67.90679"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shahdadpur",
                    "latitude"=> "25.92539",
                    "longitude"=> "68.6228"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shahkot",
                    "latitude"=> "31.5709",
                    "longitude"=> "73.48531"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shahpur",
                    "latitude"=> "32.2682",
                    "longitude"=> "72.46884"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shahpur Chakar",
                    "latitude"=> "26.15411",
                    "longitude"=> "68.65013"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shahr Sultan",
                    "latitude"=> "29.57517",
                    "longitude"=> "71.02209"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shakargarh",
                    "latitude"=> "32.26361",
                    "longitude"=> "75.16008"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sharqpur Sharif",
                    "latitude"=> "31.46116",
                    "longitude"=> "74.10091"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shekhupura",
                    "latitude"=> "31.71287",
                    "longitude"=> "73.98556"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shikarpur",
                    "latitude"=> "27.95558",
                    "longitude"=> "68.63823"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shingli Bala",
                    "latitude"=> "34.67872",
                    "longitude"=> "72.98491"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shinpokh",
                    "latitude"=> "34.32959",
                    "longitude"=> "71.17852"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shorkot",
                    "latitude"=> "31.91023",
                    "longitude"=> "70.87757"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Shujaabad",
                    "latitude"=> "29.88092",
                    "longitude"=> "71.29344"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sialkot",
                    "latitude"=> "32.49268",
                    "longitude"=> "74.53134"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sibi",
                    "latitude"=> "29.54299",
                    "longitude"=> "67.87726"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sillanwali",
                    "latitude"=> "31.82539",
                    "longitude"=> "72.54064"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sinjhoro",
                    "latitude"=> "26.03008",
                    "longitude"=> "68.80867"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Skardu",
                    "latitude"=> "35.29787",
                    "longitude"=> "75.63372"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sobhodero",
                    "latitude"=> "27.30475",
                    "longitude"=> "68.39715"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sodhri",
                    "latitude"=> "32.46211",
                    "longitude"=> "74.18207"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sohbatpur",
                    "latitude"=> "28.52038",
                    "longitude"=> "68.54298"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sukheke Mandi",
                    "latitude"=> "31.86541",
                    "longitude"=> "73.50875"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sukkur",
                    "latitude"=> "27.70323",
                    "longitude"=> "68.85889"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Surab",
                    "latitude"=> "28.49276",
                    "longitude"=> "66.25999"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Surkhpur",
                    "latitude"=> "32.71816",
                    "longitude"=> "74.44773"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Swabi",
                    "latitude"=> "34.12018",
                    "longitude"=> "72.46982"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Sīta Road",
                    "latitude"=> "27.03333",
                    "longitude"=> "67.85"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Talagang",
                    "latitude"=> "32.92766",
                    "longitude"=> "72.41594"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Talamba",
                    "latitude"=> "30.52693",
                    "longitude"=> "72.24079"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Talhar",
                    "latitude"=> "24.88454",
                    "longitude"=> "68.81437"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tandlianwala",
                    "latitude"=> "31.03359",
                    "longitude"=> "73.13268"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tando Adam",
                    "latitude"=> "25.76818",
                    "longitude"=> "68.66196"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tando Allahyar",
                    "latitude"=> "25.4605",
                    "longitude"=> "68.71745"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tando Bago",
                    "latitude"=> "24.78914",
                    "longitude"=> "68.96535"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tando Jam",
                    "latitude"=> "25.42813",
                    "longitude"=> "68.52923"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tando Mitha Khan",
                    "latitude"=> "25.99625",
                    "longitude"=> "69.20251"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tando Muhammad Khan",
                    "latitude"=> "25.12384",
                    "longitude"=> "68.53677"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tangi",
                    "latitude"=> "34.3009",
                    "longitude"=> "71.65238"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tangwani",
                    "latitude"=> "28.27886",
                    "longitude"=> "68.9976"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tank",
                    "latitude"=> "32.21707",
                    "longitude"=> "70.38315"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Taunsa",
                    "latitude"=> "30.70358",
                    "longitude"=> "70.65054"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Thal",
                    "latitude"=> "35.47836",
                    "longitude"=> "72.24383"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Tharu Shah",
                    "latitude"=> "26.9423",
                    "longitude"=> "68.11759"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Thatta",
                    "latitude"=> "24.74745",
                    "longitude"=> "67.92353"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Thul",
                    "latitude"=> "28.2403",
                    "longitude"=> "68.7755"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Timargara",
                    "latitude"=> "34.82659",
                    "longitude"=> "71.84423"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Toba Tek Singh",
                    "latitude"=> "30.97127",
                    "longitude"=> "72.48275"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Topi",
                    "latitude"=> "34.07034",
                    "longitude"=> "72.62147"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Turbat",
                    "latitude"=> "26.00122",
                    "longitude"=> "63.04849"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ubauro",
                    "latitude"=> "28.16429",
                    "longitude"=> "69.73114"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Umarkot",
                    "latitude"=> "25.36329",
                    "longitude"=> "69.74184"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Upper Dir",
                    "latitude"=> "35.2074",
                    "longitude"=> "71.8768"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Usta Muhammad",
                    "latitude"=> "28.17723",
                    "longitude"=> "68.04367"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Uthal",
                    "latitude"=> "25.80722",
                    "longitude"=> "66.62194"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Utmanzai",
                    "latitude"=> "34.18775",
                    "longitude"=> "71.76274"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Vihari",
                    "latitude"=> "30.0445",
                    "longitude"=> "72.3556"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Wana",
                    "latitude"=> "32.29889",
                    "longitude"=> "69.5725"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Warah",
                    "latitude"=> "27.44805",
                    "longitude"=> "67.79654"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Wazirabad",
                    "latitude"=> "32.44324",
                    "longitude"=> "74.12"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Yazman",
                    "latitude"=> "29.12122",
                    "longitude"=> "71.74459"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Zafarwal",
                    "latitude"=> "32.34464",
                    "longitude"=> "74.8999"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Zahir Pir",
                    "latitude"=> "28.81284",
                    "longitude"=> "70.52341"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Zaida",
                    "latitude"=> "34.0595",
                    "longitude"=> "72.4669"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Zhob",
                    "latitude"=> "31.34082",
                    "longitude"=> "69.4493"
                  ],
                  [
                    "country"=> "Pakistan","country_code"=> "PK",
                    "city"=> "Ziarat",
                    "latitude"=> "30.38244",
                    "longitude"=> "67.72562"
                  ]
                  ];
        locations::insert($list_of_cities);
    }
}