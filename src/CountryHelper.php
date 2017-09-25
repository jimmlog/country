<?php

namespace jimmlog\helper;

/**
 * Country helper for static access country data like ISO 3166-1 alpha-2 code and english short countries name
 * Some codes inherited from MaxMind. See @link https://dev.maxmind.com/geoip/legacy/codes/iso3166/
 *
 * Class CountryHelper
 * @package jimmlog\helper
 */
class CountryHelper
{
    const WORLD_WIDE = 0;
    const AFGHANISTAN = 1;
    const ALAND_ISLANDS = 2;
    const ALBANIA = 3;
    const ALGERIA = 4;
    const AMERICAN_SAMOA = 5;
    const ANDORRA = 6;
    const ANGOLA = 7;
    const ANGUILLA = 8;
    const ANTARCTICA = 9;
    const ANTIGUA_AND_BARBUDA = 10;
    const ARGENTINA = 11;
    const ARMENIA = 12;
    const ARUBA = 13;
    const ASCENSION_ISLAND = 14;
    const AUSTRALIA = 15;
    const AUSTRIA = 16;
    const AZERBAIJAN = 17;
    const BAHAMAS = 18;
    const BAHRAIN = 19;
    const BANGLADESH = 20;
    const BARBADOS = 21;
    const BELARUS = 22;
    const BELGIUM = 23;
    const BELIZE = 24;
    const BENIN = 25;
    const BERMUDA = 26;
    const BHUTAN = 27;
    const BOLIVIA = 28;
    const BOSNIA_AND_HERZEGOVINA = 29;
    const BOTSWANA = 30;
    const BRAZIL = 31;
    const BRITISH_INDIAN_OCEAN_TERRITORY = 32;
    const BRITISH_VIRGIN_ISLANDS = 33;
    const BRUNEI = 34;
    const BULGARIA = 35;
    const BURKINA_FASO = 36;
    const BURUNDI = 37;
    const CAMBODIA = 38;
    const CAMEROON = 39;
    const CANADA = 40;
    const CANARY_ISLANDS = 41;
    const CAPE_VERDE = 42;
    const CARIBBEAN_NETHERLANDS = 43;
    const CAYMAN_ISLANDS = 44;
    const CENTRAL_AFRICAN_REPUBLIC = 45;
    const CEUTA_AND_MELILLA = 46;
    const CHAD = 47;
    const CHILE = 48;
    const CHINA = 49;
    const CHRISTMAS_ISLAND = 50;
    const COCOS_KEELING_ISLANDS = 51;
    const COLOMBIA = 52;
    const COMOROS = 53;
    const CONGO_BRAZZAVILLE = 54;
    const CONGO_KINSHASA = 55;
    const COOK_ISLANDS = 56;
    const COSTA_RICA = 57;
    const COTE_D_IVOIRE = 58;
    const CROATIA = 59;
    const CUBA = 60;
    const CURACAO = 61;
    const CYPRUS = 62;
    const CZECH_REPUBLIC = 63;
    const DENMARK = 64;
    const DIEGO_GARCIA = 65;
    const DJIBOUTI = 66;
    const DOMINICA = 67;
    const DOMINICAN_REPUBLIC = 68;
    const ECUADOR = 69;
    const EGYPT = 70;
    const EL_SALVADOR = 71;
    const EQUATORIAL_GUINEA = 72;
    const ERITREA = 73;
    const ESTONIA = 74;
    const ETHIOPIA = 75;
    const FALKLAND_ISLANDS = 76;
    const FAROE_ISLANDS = 77;
    const FIJI = 78;
    const FINLAND = 79;
    const FRANCE = 80;
    const FRENCH_GUIANA = 81;
    const FRENCH_POLYNESIA = 82;
    const FRENCH_SOUTHERN_TERRITORIES = 83;
    const GABON = 84;
    const GAMBIA = 85;
    const GEORGIA = 86;
    const GERMANY = 87;
    const GHANA = 88;
    const GIBRALTAR = 89;
    const GREECE = 90;
    const GREENLAND = 91;
    const GRENADA = 92;
    const GUADELOUPE = 93;
    const GUAM = 94;
    const GUATEMALA = 95;
    const GUERNSEY = 96;
    const GUINEA = 97;
    const GUINEA_BISSAU = 98;
    const GUYANA = 99;
    const HAITI = 100;
    const HONDURAS = 101;
    const HONG_KONG_SAR_CHINA = 102;
    const HUNGARY = 103;
    const ICELAND = 104;
    const INDIA = 105;
    const INDONESIA = 106;
    const IRAN = 107;
    const IRAQ = 108;
    const IRELAND = 109;
    const ISLE_OF_MAN = 110;
    const ISRAEL = 111;
    const ITALY = 112;
    const JAMAICA = 113;
    const JAPAN = 114;
    const JERSEY = 115;
    const JORDAN = 116;
    const KAZAKHSTAN = 117;
    const KENYA = 118;
    const KIRIBATI = 119;
    const KOSOVO = 120;
    const KUWAIT = 121;
    const KYRGYZSTAN = 122;
    const LAOS = 123;
    const LATVIA = 124;
    const LEBANON = 125;
    const LESOTHO = 126;
    const LIBERIA = 127;
    const LIBYA = 128;
    const LIECHTENSTEIN = 129;
    const LITHUANIA = 130;
    const LUXEMBOURG = 131;
    const MACAU_SAR_CHINA = 132;
    const MACEDONIA = 133;
    const MADAGASCAR = 134;
    const MALAWI = 135;
    const MALAYSIA = 136;
    const MALDIVES = 137;
    const MALI = 138;
    const MALTA = 139;
    const MARSHALL_ISLANDS = 140;
    const MARTINIQUE = 141;
    const MAURITANIA = 142;
    const MAURITIUS = 143;
    const MAYOTTE = 144;
    const MEXICO = 145;
    const MICRONESIA = 146;
    const MOLDOVA = 147;
    const MONACO = 148;
    const MONGOLIA = 149;
    const MONTENEGRO = 150;
    const MONTSERRAT = 151;
    const MOROCCO = 152;
    const MOZAMBIQUE = 153;
    const MYANMAR = 154;
    const NAMIBIA = 155;
    const NAURU = 156;
    const NEPAL = 157;
    const NETHERLANDS = 158;
    const NEW_CALEDONIA = 159;
    const NEW_ZEALAND = 160;
    const NICARAGUA = 161;
    const NIGER = 162;
    const NIGERIA = 163;
    const NIUE = 164;
    const NORFOLK_ISLAND = 165;
    const NORTH_KOREA = 166;
    const NORTHERN_MARIANA_ISLANDS = 167;
    const NORWAY = 168;
    const OMAN = 169;
    const PAKISTAN = 170;
    const PALAU = 171;
    const PALESTINIAN_TERRITORIES = 172;
    const PANAMA = 173;
    const PAPUA_NEW_GUINEA = 174;
    const PARAGUAY = 175;
    const PERU = 176;
    const PHILIPPINES = 177;
    const PITCAIRN_ISLANDS = 178;
    const POLAND = 179;
    const PORTUGAL = 180;
    const PUERTO_RICO = 181;
    const QATAR = 182;
    const REUNION = 183;
    const ROMANIA = 184;
    const RUSSIA = 185;
    const RWANDA = 186;
    const SAMOA = 187;
    const SAN_MARINO = 188;
    const SAO_TOME_AND_PRINCIPE = 189;
    const SAUDI_ARABIA = 190;
    const SENEGAL = 191;
    const SERBIA = 192;
    const SEYCHELLES = 193;
    const SIERRA_LEONE = 194;
    const SINGAPORE = 195;
    const SINT_MAARTEN = 196;
    const SLOVAKIA = 197;
    const SLOVENIA = 198;
    const SOLOMON_ISLANDS = 199;
    const SOMALIA = 200;
    const SOUTH_AFRICA = 201;
    const SOUTH_GEORGIA_AND_SOUTH_SANDWICH_ISLANDS = 202;
    const SOUTH_KOREA = 203;
    const SOUTH_SUDAN = 204;
    const SPAIN = 205;
    const SRI_LANKA = 206;
    const ST_BARTHELEMY = 207;
    const ST_HELENA = 208;
    const ST_KITTS_AND_NEVIS = 209;
    const ST_LUCIA = 210;
    const ST_MARTIN = 211;
    const ST_PIERRE_AND_MIQUELON = 212;
    const ST_VINCENT_AND_GRENADINES = 213;
    const SUDAN = 214;
    const SURINAME = 215;
    const SVALBARD_AND_JAN_MAYEN = 216;
    const SWAZILAND = 217;
    const SWEDEN = 218;
    const SWITZERLAND = 219;
    const SYRIA = 220;
    const TAIWAN = 221;
    const TAJIKISTAN = 222;
    const TANZANIA = 223;
    const THAILAND = 224;
    const TIMOR_LESTE = 225;
    const TOGO = 226;
    const TOKELAU = 227;
    const TONGA = 228;
    const TRINIDAD_AND_TOBAGO = 229;
    const TRISTAN_DA_CUNHA = 230;
    const TUNISIA = 231;
    const TURKEY = 232;
    const TURKMENISTAN = 233;
    const TURKS_AND_CAICOS_ISLANDS = 234;
    const TUVALU = 235;
    const US_OUTLYING_ISLANDS = 236;
    const US_VIRGIN_ISLANDS = 237;
    const UGANDA = 238;
    const UKRAINE = 239;
    const UNITED_ARAB_EMIRATES = 240;
    const UNITED_KINGDOM = 241;
    const UNITED_STATES = 242;
    const URUGUAY = 243;
    const UZBEKISTAN = 244;
    const VANUATU = 245;
    const VATICAN_CITY = 246;
    const VENEZUELA = 247;
    const VIETNAM = 248;
    const WALLIS_AND_FUTUNA = 249;
    const WESTERN_SAHARA = 250;
    const YEMEN = 251;
    const ZAMBIA = 252;
    const ZIMBABWE = 253;
    const ANONYMOUS_PROXY = 254;
    const SATELLITE_PROVIDER = 255;
    const OTHER_COUNTRY = 256;
    const ASIA_PACIFIC_REGION = 257;
    const EUROPE = 258;

    /**
     * Array of ISO 3166-1 alpha-2 countries code
     * @var array
     */
    protected static $isoList = [
        self::WORLD_WIDE => 'WW',
        self::AFGHANISTAN => 'AF',
        self::ALAND_ISLANDS => 'AX',
        self::ALBANIA => 'AL',
        self::ALGERIA => 'DZ',
        self::AMERICAN_SAMOA => 'AS',
        self::ANDORRA => 'AD',
        self::ANGOLA => 'AO',
        self::ANGUILLA => 'AI',
        self::ANTARCTICA => 'AQ',
        self::ANTIGUA_AND_BARBUDA => 'AG',
        self::ARGENTINA => 'AR',
        self::ARMENIA => 'AM',
        self::ARUBA => 'AW',
        self::ASCENSION_ISLAND => 'AC',
        self::AUSTRALIA => 'AU',
        self::AUSTRIA => 'AT',
        self::AZERBAIJAN => 'AZ',
        self::BAHAMAS => 'BS',
        self::BAHRAIN => 'BH',
        self::BANGLADESH => 'BD',
        self::BARBADOS => 'BB',
        self::BELARUS => 'BY',
        self::BELGIUM => 'BE',
        self::BELIZE => 'BZ',
        self::BENIN => 'BJ',
        self::BERMUDA => 'BM',
        self::BHUTAN => 'BT',
        self::BOLIVIA => 'BO',
        self::BOSNIA_AND_HERZEGOVINA => 'BA',
        self::BOTSWANA => 'BW',
        self::BRAZIL => 'BR',
        self::BRITISH_INDIAN_OCEAN_TERRITORY => 'IO',
        self::BRITISH_VIRGIN_ISLANDS => 'VG',
        self::BRUNEI => 'BN',
        self::BULGARIA => 'BG',
        self::BURKINA_FASO => 'BF',
        self::BURUNDI => 'BI',
        self::CAMBODIA => 'KH',
        self::CAMEROON => 'CM',
        self::CANADA => 'CA',
        self::CANARY_ISLANDS => 'IC',
        self::CAPE_VERDE => 'CV',
        self::CARIBBEAN_NETHERLANDS => 'BQ',
        self::CAYMAN_ISLANDS => 'KY',
        self::CENTRAL_AFRICAN_REPUBLIC => 'CF',
        self::CEUTA_AND_MELILLA => 'EA',
        self::CHAD => 'TD',
        self::CHILE => 'CL',
        self::CHINA => 'CN',
        self::CHRISTMAS_ISLAND => 'CX',
        self::COCOS_KEELING_ISLANDS => 'CC',
        self::COLOMBIA => 'CO',
        self::COMOROS => 'KM',
        self::CONGO_BRAZZAVILLE => 'CG',
        self::CONGO_KINSHASA => 'CD',
        self::COOK_ISLANDS => 'CK',
        self::COSTA_RICA => 'CR',
        self::COTE_D_IVOIRE => 'CI',
        self::CROATIA => 'HR',
        self::CUBA => 'CU',
        self::CURACAO => 'CW',
        self::CYPRUS => 'CY',
        self::CZECH_REPUBLIC => 'CZ',
        self::DENMARK => 'DK',
        self::DIEGO_GARCIA => 'DG',
        self::DJIBOUTI => 'DJ',
        self::DOMINICA => 'DM',
        self::DOMINICAN_REPUBLIC => 'DO',
        self::ECUADOR => 'EC',
        self::EGYPT => 'EG',
        self::EL_SALVADOR => 'SV',
        self::EQUATORIAL_GUINEA => 'GQ',
        self::ERITREA => 'ER',
        self::ESTONIA => 'EE',
        self::ETHIOPIA => 'ET',
        self::FALKLAND_ISLANDS => 'FK',
        self::FAROE_ISLANDS => 'FO',
        self::FIJI => 'FJ',
        self::FINLAND => 'FI',
        self::FRANCE => 'FR',
        self::FRENCH_GUIANA => 'GF',
        self::FRENCH_POLYNESIA => 'PF',
        self::FRENCH_SOUTHERN_TERRITORIES => 'TF',
        self::GABON => 'GA',
        self::GAMBIA => 'GM',
        self::GEORGIA => 'GE',
        self::GERMANY => 'DE',
        self::GHANA => 'GH',
        self::GIBRALTAR => 'GI',
        self::GREECE => 'GR',
        self::GREENLAND => 'GL',
        self::GRENADA => 'GD',
        self::GUADELOUPE => 'GP',
        self::GUAM => 'GU',
        self::GUATEMALA => 'GT',
        self::GUERNSEY => 'GG',
        self::GUINEA => 'GN',
        self::GUINEA_BISSAU => 'GW',
        self::GUYANA => 'GY',
        self::HAITI => 'HT',
        self::HONDURAS => 'HN',
        self::HONG_KONG_SAR_CHINA => 'HK',
        self::HUNGARY => 'HU',
        self::ICELAND => 'IS',
        self::INDIA => 'IN',
        self::INDONESIA => 'ID',
        self::IRAN => 'IR',
        self::IRAQ => 'IQ',
        self::IRELAND => 'IE',
        self::ISLE_OF_MAN => 'IM',
        self::ISRAEL => 'IL',
        self::ITALY => 'IT',
        self::JAMAICA => 'JM',
        self::JAPAN => 'JP',
        self::JERSEY => 'JE',
        self::JORDAN => 'JO',
        self::KAZAKHSTAN => 'KZ',
        self::KENYA => 'KE',
        self::KIRIBATI => 'KI',
        self::KOSOVO => 'XK',
        self::KUWAIT => 'KW',
        self::KYRGYZSTAN => 'KG',
        self::LAOS => 'LA',
        self::LATVIA => 'LV',
        self::LEBANON => 'LB',
        self::LESOTHO => 'LS',
        self::LIBERIA => 'LR',
        self::LIBYA => 'LY',
        self::LIECHTENSTEIN => 'LI',
        self::LITHUANIA => 'LT',
        self::LUXEMBOURG => 'LU',
        self::MACAU_SAR_CHINA => 'MO',
        self::MACEDONIA => 'MK',
        self::MADAGASCAR => 'MG',
        self::MALAWI => 'MW',
        self::MALAYSIA => 'MY',
        self::MALDIVES => 'MV',
        self::MALI => 'ML',
        self::MALTA => 'MT',
        self::MARSHALL_ISLANDS => 'MH',
        self::MARTINIQUE => 'MQ',
        self::MAURITANIA => 'MR',
        self::MAURITIUS => 'MU',
        self::MAYOTTE => 'YT',
        self::MEXICO => 'MX',
        self::MICRONESIA => 'FM',
        self::MOLDOVA => 'MD',
        self::MONACO => 'MC',
        self::MONGOLIA => 'MN',
        self::MONTENEGRO => 'ME',
        self::MONTSERRAT => 'MS',
        self::MOROCCO => 'MA',
        self::MOZAMBIQUE => 'MZ',
        self::MYANMAR => 'MM',
        self::NAMIBIA => 'NA',
        self::NAURU => 'NR',
        self::NEPAL => 'NP',
        self::NETHERLANDS => 'NL',
        self::NEW_CALEDONIA => 'NC',
        self::NEW_ZEALAND => 'NZ',
        self::NICARAGUA => 'NI',
        self::NIGER => 'NE',
        self::NIGERIA => 'NG',
        self::NIUE => 'NU',
        self::NORFOLK_ISLAND => 'NF',
        self::NORTH_KOREA => 'KP',
        self::NORTHERN_MARIANA_ISLANDS => 'MP',
        self::NORWAY => 'NO',
        self::OMAN => 'OM',
        self::PAKISTAN => 'PK',
        self::PALAU => 'PW',
        self::PALESTINIAN_TERRITORIES => 'PS',
        self::PANAMA => 'PA',
        self::PAPUA_NEW_GUINEA => 'PG',
        self::PARAGUAY => 'PY',
        self::PERU => 'PE',
        self::PHILIPPINES => 'PH',
        self::PITCAIRN_ISLANDS => 'PN',
        self::POLAND => 'PL',
        self::PORTUGAL => 'PT',
        self::PUERTO_RICO => 'PR',
        self::QATAR => 'QA',
        self::REUNION => 'RE',
        self::ROMANIA => 'RO',
        self::RUSSIA => 'RU',
        self::RWANDA => 'RW',
        self::SAMOA => 'WS',
        self::SAN_MARINO => 'SM',
        self::SAO_TOME_AND_PRINCIPE => 'ST',
        self::SAUDI_ARABIA => 'SA',
        self::SENEGAL => 'SN',
        self::SERBIA => 'RS',
        self::SEYCHELLES => 'SC',
        self::SIERRA_LEONE => 'SL',
        self::SINGAPORE => 'SG',
        self::SINT_MAARTEN => 'SX',
        self::SLOVAKIA => 'SK',
        self::SLOVENIA => 'SI',
        self::SOLOMON_ISLANDS => 'SB',
        self::SOMALIA => 'SO',
        self::SOUTH_AFRICA => 'ZA',
        self::SOUTH_GEORGIA_AND_SOUTH_SANDWICH_ISLANDS => 'GS',
        self::SOUTH_KOREA => 'KR',
        self::SOUTH_SUDAN => 'SS',
        self::SPAIN => 'ES',
        self::SRI_LANKA => 'LK',
        self::ST_BARTHELEMY => 'BL',
        self::ST_HELENA => 'SH',
        self::ST_KITTS_AND_NEVIS => 'KN',
        self::ST_LUCIA => 'LC',
        self::ST_MARTIN => 'MF',
        self::ST_PIERRE_AND_MIQUELON => 'PM',
        self::ST_VINCENT_AND_GRENADINES => 'VC',
        self::SUDAN => 'SD',
        self::SURINAME => 'SR',
        self::SVALBARD_AND_JAN_MAYEN => 'SJ',
        self::SWAZILAND => 'SZ',
        self::SWEDEN => 'SE',
        self::SWITZERLAND => 'CH',
        self::SYRIA => 'SY',
        self::TAIWAN => 'TW',
        self::TAJIKISTAN => 'TJ',
        self::TANZANIA => 'TZ',
        self::THAILAND => 'TH',
        self::TIMOR_LESTE => 'TL',
        self::TOGO => 'TG',
        self::TOKELAU => 'TK',
        self::TONGA => 'TO',
        self::TRINIDAD_AND_TOBAGO => 'TT',
        self::TRISTAN_DA_CUNHA => 'TA',
        self::TUNISIA => 'TN',
        self::TURKEY => 'TR',
        self::TURKMENISTAN => 'TM',
        self::TURKS_AND_CAICOS_ISLANDS => 'TC',
        self::TUVALU => 'TV',
        self::US_OUTLYING_ISLANDS => 'UM',
        self::US_VIRGIN_ISLANDS => 'VI',
        self::UGANDA => 'UG',
        self::UKRAINE => 'UA',
        self::UNITED_ARAB_EMIRATES => 'AE',
        self::UNITED_KINGDOM => 'GB',
        self::UNITED_STATES => 'US',
        self::URUGUAY => 'UY',
        self::UZBEKISTAN => 'UZ',
        self::VANUATU => 'VU',
        self::VATICAN_CITY => 'VA',
        self::VENEZUELA => 'VE',
        self::VIETNAM => 'VN',
        self::WALLIS_AND_FUTUNA => 'WF',
        self::WESTERN_SAHARA => 'EH',
        self::YEMEN => 'YE',
        self::ZAMBIA => 'ZM',
        self::ZIMBABWE => 'ZW',
        self::ANONYMOUS_PROXY => 'A1',
        self::SATELLITE_PROVIDER => 'A2',
        self::OTHER_COUNTRY => 'O1',
        self::ASIA_PACIFIC_REGION => 'AP',
        self::EUROPE => 'EU',
    ];

    /**
     * Array of english short countries name
     * @var array
     */
    protected static $nameList = [
        self::WORLD_WIDE => 'World Wide',
        self::AFGHANISTAN => 'Afghanistan',
        self::ALAND_ISLANDS => 'Aland Islands',
        self::ALBANIA => 'Albania',
        self::ALGERIA => 'Algeria',
        self::AMERICAN_SAMOA => 'American Samoa',
        self::ANDORRA => 'Andorra',
        self::ANGOLA => 'Angola',
        self::ANGUILLA => 'Anguilla',
        self::ANTARCTICA => 'Antarctica',
        self::ANTIGUA_AND_BARBUDA => 'Antigua & Barbuda',
        self::ARGENTINA => 'Argentina',
        self::ARMENIA => 'Armenia',
        self::ARUBA => 'Aruba',
        self::ASCENSION_ISLAND => 'Ascension Island',
        self::AUSTRALIA => 'Australia',
        self::AUSTRIA => 'Austria',
        self::AZERBAIJAN => 'Azerbaijan',
        self::BAHAMAS => 'Bahamas',
        self::BAHRAIN => 'Bahrain',
        self::BANGLADESH => 'Bangladesh',
        self::BARBADOS => 'Barbados',
        self::BELARUS => 'Belarus',
        self::BELGIUM => 'Belgium',
        self::BELIZE => 'Belize',
        self::BENIN => 'Benin',
        self::BERMUDA => 'Bermuda',
        self::BHUTAN => 'Bhutan',
        self::BOLIVIA => 'Bolivia',
        self::BOSNIA_AND_HERZEGOVINA => 'Bosnia & Herzegovina',
        self::BOTSWANA => 'Botswana',
        self::BRAZIL => 'Brazil',
        self::BRITISH_INDIAN_OCEAN_TERRITORY => 'British Indian Ocean Territory',
        self::BRITISH_VIRGIN_ISLANDS => 'British Virgin Islands',
        self::BRUNEI => 'Brunei',
        self::BULGARIA => 'Bulgaria',
        self::BURKINA_FASO => 'Burkina Faso',
        self::BURUNDI => 'Burundi',
        self::CAMBODIA => 'Cambodia',
        self::CAMEROON => 'Cameroon',
        self::CANADA => 'Canada',
        self::CANARY_ISLANDS => 'Canary Islands',
        self::CAPE_VERDE => 'Cape Verde',
        self::CARIBBEAN_NETHERLANDS => 'Caribbean Netherlands',
        self::CAYMAN_ISLANDS => 'Cayman Islands',
        self::CENTRAL_AFRICAN_REPUBLIC => 'Central African Republic',
        self::CEUTA_AND_MELILLA => 'Ceuta & Melilla',
        self::CHAD => 'Chad',
        self::CHILE => 'Chile',
        self::CHINA => 'China',
        self::CHRISTMAS_ISLAND => 'Christmas Island',
        self::COCOS_KEELING_ISLANDS => 'Cocos (Keeling) Islands',
        self::COLOMBIA => 'Colombia',
        self::COMOROS => 'Comoros',
        self::CONGO_BRAZZAVILLE => 'Congo - Brazzaville',
        self::CONGO_KINSHASA => 'Congo - Kinshasa',
        self::COOK_ISLANDS => 'Cook Islands',
        self::COSTA_RICA => 'Costa Rica',
        self::COTE_D_IVOIRE => 'Cote d’Ivoire',
        self::CROATIA => 'Croatia',
        self::CUBA => 'Cuba',
        self::CURACAO => 'Curacao',
        self::CYPRUS => 'Cyprus',
        self::CZECH_REPUBLIC => 'Czech Republic',
        self::DENMARK => 'Denmark',
        self::DIEGO_GARCIA => 'Diego Garcia',
        self::DJIBOUTI => 'Djibouti',
        self::DOMINICA => 'Dominica',
        self::DOMINICAN_REPUBLIC => 'Dominican Republic',
        self::ECUADOR => 'Ecuador',
        self::EGYPT => 'Egypt',
        self::EL_SALVADOR => 'El Salvador',
        self::EQUATORIAL_GUINEA => 'Equatorial Guinea',
        self::ERITREA => 'Eritrea',
        self::ESTONIA => 'Estonia',
        self::ETHIOPIA => 'Ethiopia',
        self::FALKLAND_ISLANDS => 'Falkland Islands',
        self::FAROE_ISLANDS => 'Faroe Islands',
        self::FIJI => 'Fiji',
        self::FINLAND => 'Finland',
        self::FRANCE => 'France',
        self::FRENCH_GUIANA => 'French Guiana',
        self::FRENCH_POLYNESIA => 'French Polynesia',
        self::FRENCH_SOUTHERN_TERRITORIES => 'French Southern Territories',
        self::GABON => 'Gabon',
        self::GAMBIA => 'Gambia',
        self::GEORGIA => 'Georgia',
        self::GERMANY => 'Germany',
        self::GHANA => 'Ghana',
        self::GIBRALTAR => 'Gibraltar',
        self::GREECE => 'Greece',
        self::GREENLAND => 'Greenland',
        self::GRENADA => 'Grenada',
        self::GUADELOUPE => 'Guadeloupe',
        self::GUAM => 'Guam',
        self::GUATEMALA => 'Guatemala',
        self::GUERNSEY => 'Guernsey',
        self::GUINEA => 'Guinea',
        self::GUINEA_BISSAU => 'Guinea-Bissau',
        self::GUYANA => 'Guyana',
        self::HAITI => 'Haiti',
        self::HONDURAS => 'Honduras',
        self::HONG_KONG_SAR_CHINA => 'Hong Kong SAR China',
        self::HUNGARY => 'Hungary',
        self::ICELAND => 'Iceland',
        self::INDIA => 'India',
        self::INDONESIA => 'Indonesia',
        self::IRAN => 'Iran',
        self::IRAQ => 'Iraq',
        self::IRELAND => 'Ireland',
        self::ISLE_OF_MAN => 'Isle of Man',
        self::ISRAEL => 'Israel',
        self::ITALY => 'Italy',
        self::JAMAICA => 'Jamaica',
        self::JAPAN => 'Japan',
        self::JERSEY => 'Jersey',
        self::JORDAN => 'Jordan',
        self::KAZAKHSTAN => 'Kazakhstan',
        self::KENYA => 'Kenya',
        self::KIRIBATI => 'Kiribati',
        self::KOSOVO => 'Kosovo',
        self::KUWAIT => 'Kuwait',
        self::KYRGYZSTAN => 'Kyrgyzstan',
        self::LAOS => 'Laos',
        self::LATVIA => 'Latvia',
        self::LEBANON => 'Lebanon',
        self::LESOTHO => 'Lesotho',
        self::LIBERIA => 'Liberia',
        self::LIBYA => 'Libya',
        self::LIECHTENSTEIN => 'Liechtenstein',
        self::LITHUANIA => 'Lithuania',
        self::LUXEMBOURG => 'Luxembourg',
        self::MACAU_SAR_CHINA => 'Macau SAR China',
        self::MACEDONIA => 'Macedonia',
        self::MADAGASCAR => 'Madagascar',
        self::MALAWI => 'Malawi',
        self::MALAYSIA => 'Malaysia',
        self::MALDIVES => 'Maldives',
        self::MALI => 'Mali',
        self::MALTA => 'Malta',
        self::MARSHALL_ISLANDS => 'Marshall Islands',
        self::MARTINIQUE => 'Martinique',
        self::MAURITANIA => 'Mauritania',
        self::MAURITIUS => 'Mauritius',
        self::MAYOTTE => 'Mayotte',
        self::MEXICO => 'Mexico',
        self::MICRONESIA => 'Micronesia',
        self::MOLDOVA => 'Moldova',
        self::MONACO => 'Monaco',
        self::MONGOLIA => 'Mongolia',
        self::MONTENEGRO => 'Montenegro',
        self::MONTSERRAT => 'Montserrat',
        self::MOROCCO => 'Morocco',
        self::MOZAMBIQUE => 'Mozambique',
        self::MYANMAR => 'Myanmar (Burma)',
        self::NAMIBIA => 'Namibia',
        self::NAURU => 'Nauru',
        self::NEPAL => 'Nepal',
        self::NETHERLANDS => 'Netherlands',
        self::NEW_CALEDONIA => 'New Caledonia',
        self::NEW_ZEALAND => 'New Zealand',
        self::NICARAGUA => 'Nicaragua',
        self::NIGER => 'Niger',
        self::NIGERIA => 'Nigeria',
        self::NIUE => 'Niue',
        self::NORFOLK_ISLAND => 'Norfolk Island',
        self::NORTH_KOREA => 'North Korea',
        self::NORTHERN_MARIANA_ISLANDS => 'Northern Mariana Islands',
        self::NORWAY => 'Norway',
        self::OMAN => 'Oman',
        self::PAKISTAN => 'Pakistan',
        self::PALAU => 'Palau',
        self::PALESTINIAN_TERRITORIES => 'Palestinian Territories',
        self::PANAMA => 'Panama',
        self::PAPUA_NEW_GUINEA => 'Papua New Guinea',
        self::PARAGUAY => 'Paraguay',
        self::PERU => 'Peru',
        self::PHILIPPINES => 'Philippines',
        self::PITCAIRN_ISLANDS => 'Pitcairn Islands',
        self::POLAND => 'Poland',
        self::PORTUGAL => 'Portugal',
        self::PUERTO_RICO => 'Puerto Rico',
        self::QATAR => 'Qatar',
        self::REUNION => 'Reunion',
        self::ROMANIA => 'Romania',
        self::RUSSIA => 'Russia',
        self::RWANDA => 'Rwanda',
        self::SAMOA => 'Samoa',
        self::SAN_MARINO => 'San Marino',
        self::SAO_TOME_AND_PRINCIPE => 'São Tome & Principe',
        self::SAUDI_ARABIA => 'Saudi Arabia',
        self::SENEGAL => 'Senegal',
        self::SERBIA => 'Serbia',
        self::SEYCHELLES => 'Seychelles',
        self::SIERRA_LEONE => 'Sierra Leone',
        self::SINGAPORE => 'Singapore',
        self::SINT_MAARTEN => 'Sint Maarten',
        self::SLOVAKIA => 'Slovakia',
        self::SLOVENIA => 'Slovenia',
        self::SOLOMON_ISLANDS => 'Solomon Islands',
        self::SOMALIA => 'Somalia',
        self::SOUTH_AFRICA => 'South Africa',
        self::SOUTH_GEORGIA_AND_SOUTH_SANDWICH_ISLANDS => 'South Georgia & South Sandwich Islands',
        self::SOUTH_KOREA => 'South Korea',
        self::SOUTH_SUDAN => 'South Sudan',
        self::SPAIN => 'Spain',
        self::SRI_LANKA => 'Sri Lanka',
        self::ST_BARTHELEMY => 'St. Barthelemy',
        self::ST_HELENA => 'St. Helena',
        self::ST_KITTS_AND_NEVIS => 'St. Kitts & Nevis',
        self::ST_LUCIA => 'St. Lucia',
        self::ST_MARTIN => 'St. Martin',
        self::ST_PIERRE_AND_MIQUELON => 'St. Pierre & Miquelon',
        self::ST_VINCENT_AND_GRENADINES => 'St. Vincent & Grenadines',
        self::SUDAN => 'Sudan',
        self::SURINAME => 'Suriname',
        self::SVALBARD_AND_JAN_MAYEN => 'Svalbard & Jan Mayen',
        self::SWAZILAND => 'Swaziland',
        self::SWEDEN => 'Sweden',
        self::SWITZERLAND => 'Switzerland',
        self::SYRIA => 'Syria',
        self::TAIWAN => 'Taiwan',
        self::TAJIKISTAN => 'Tajikistan',
        self::TANZANIA => 'Tanzania',
        self::THAILAND => 'Thailand',
        self::TIMOR_LESTE => 'Timor-Leste',
        self::TOGO => 'Togo',
        self::TOKELAU => 'Tokelau',
        self::TONGA => 'Tonga',
        self::TRINIDAD_AND_TOBAGO => 'Trinidad & Tobago',
        self::TRISTAN_DA_CUNHA => 'Tristan da Cunha',
        self::TUNISIA => 'Tunisia',
        self::TURKEY => 'Turkey',
        self::TURKMENISTAN => 'Turkmenistan',
        self::TURKS_AND_CAICOS_ISLANDS => 'Turks & Caicos Islands',
        self::TUVALU => 'Tuvalu',
        self::US_OUTLYING_ISLANDS => 'U.S. Outlying Islands',
        self::US_VIRGIN_ISLANDS => 'U.S. Virgin Islands',
        self::UGANDA => 'Uganda',
        self::UKRAINE => 'Ukraine',
        self::UNITED_ARAB_EMIRATES => 'United Arab Emirates',
        self::UNITED_KINGDOM => 'United Kingdom',
        self::UNITED_STATES => 'United States',
        self::URUGUAY => 'Uruguay',
        self::UZBEKISTAN => 'Uzbekistan',
        self::VANUATU => 'Vanuatu',
        self::VATICAN_CITY => 'Vatican City',
        self::VENEZUELA => 'Venezuela',
        self::VIETNAM => 'Vietnam',
        self::WALLIS_AND_FUTUNA => 'Wallis & Futuna',
        self::WESTERN_SAHARA => 'Western Sahara',
        self::YEMEN => 'Yemen',
        self::ZAMBIA => 'Zambia',
        self::ZIMBABWE => 'Zimbabwe',
        self::ANONYMOUS_PROXY => 'Anonymous Proxy',
        self::SATELLITE_PROVIDER => 'Satellite Provider',
        self::OTHER_COUNTRY => 'Other Country',
        self::ASIA_PACIFIC_REGION => 'Asia/Pacific Region',
        self::EUROPE => 'Europe',
    ];

    /**
     * Array of countries
     * @var array
     */
    protected static $countryList = [
        self::WORLD_WIDE => ['id' => self::WORLD_WIDE, 'iso' => '--', 'name' => 'Not set',],
        self::AFGHANISTAN => ['id' => self::AFGHANISTAN, 'iso' => 'AF', 'name' => 'Afghanistan',],
        self::ALAND_ISLANDS => ['id' => self::ALAND_ISLANDS, 'iso' => 'AX', 'name' => 'Aland Islands',],
        self::ALBANIA => ['id' => self::ALBANIA, 'iso' => 'AL', 'name' => 'Albania',],
        self::ALGERIA => ['id' => self::ALGERIA, 'iso' => 'DZ', 'name' => 'Algeria',],
        self::AMERICAN_SAMOA => ['id' => self::AMERICAN_SAMOA, 'iso' => 'AS', 'name' => 'American Samoa',],
        self::ANDORRA => ['id' => self::ANDORRA, 'iso' => 'AD', 'name' => 'Andorra',],
        self::ANGOLA => ['id' => self::ANGOLA, 'iso' => 'AO', 'name' => 'Angola',],
        self::ANGUILLA => ['id' => self::ANGUILLA, 'iso' => 'AI', 'name' => 'Anguilla',],
        self::ANTARCTICA => ['id' => self::ANTARCTICA, 'iso' => 'AQ', 'name' => 'Antarctica',],
        self::ANTIGUA_AND_BARBUDA => ['id' => self::ANTIGUA_AND_BARBUDA, 'iso' => 'AG', 'name' => 'Antigua & Barbuda',],
        self::ARGENTINA => ['id' => self::ARGENTINA, 'iso' => 'AR', 'name' => 'Argentina',],
        self::ARMENIA => ['id' => self::ARMENIA, 'iso' => 'AM', 'name' => 'Armenia',],
        self::ARUBA => ['id' => self::ARUBA, 'iso' => 'AW', 'name' => 'Aruba',],
        self::ASCENSION_ISLAND => ['id' => self::ASCENSION_ISLAND, 'iso' => 'AC', 'name' => 'Ascension Island',],
        self::AUSTRALIA => ['id' => self::AUSTRALIA, 'iso' => 'AU', 'name' => 'Australia',],
        self::AUSTRIA => ['id' => self::AUSTRIA, 'iso' => 'AT', 'name' => 'Austria',],
        self::AZERBAIJAN => ['id' => self::AZERBAIJAN, 'iso' => 'AZ', 'name' => 'Azerbaijan',],
        self::BAHAMAS => ['id' => self::BAHAMAS, 'iso' => 'BS', 'name' => 'Bahamas',],
        self::BAHRAIN => ['id' => self::BAHRAIN, 'iso' => 'BH', 'name' => 'Bahrain',],
        self::BANGLADESH => ['id' => self::BANGLADESH, 'iso' => 'BD', 'name' => 'Bangladesh',],
        self::BARBADOS => ['id' => self::BARBADOS, 'iso' => 'BB', 'name' => 'Barbados',],
        self::BELARUS => ['id' => self::BELARUS, 'iso' => 'BY', 'name' => 'Belarus',],
        self::BELGIUM => ['id' => self::BELGIUM, 'iso' => 'BE', 'name' => 'Belgium',],
        self::BELIZE => ['id' => self::BELIZE, 'iso' => 'BZ', 'name' => 'Belize',],
        self::BENIN => ['id' => self::BENIN, 'iso' => 'BJ', 'name' => 'Benin',],
        self::BERMUDA => ['id' => self::BERMUDA, 'iso' => 'BM', 'name' => 'Bermuda',],
        self::BHUTAN => ['id' => self::BHUTAN, 'iso' => 'BT', 'name' => 'Bhutan',],
        self::BOLIVIA => ['id' => self::BOLIVIA, 'iso' => 'BO', 'name' => 'Bolivia',],
        self::BOSNIA_AND_HERZEGOVINA => [
            'id' => self::BOSNIA_AND_HERZEGOVINA,
            'iso' => 'BA',
            'name' => 'Bosnia & Herzegovina',
        ],
        self::BOTSWANA => ['id' => self::BOTSWANA, 'iso' => 'BW', 'name' => 'Botswana',],
        self::BRAZIL => ['id' => self::BRAZIL, 'iso' => 'BR', 'name' => 'Brazil',],
        self::BRITISH_INDIAN_OCEAN_TERRITORY => [
            'id' => self::BRITISH_INDIAN_OCEAN_TERRITORY,
            'iso' => 'IO',
            'name' => 'British Indian Ocean Territory',
        ],
        self::BRITISH_VIRGIN_ISLANDS => [
            'id' => self::BRITISH_VIRGIN_ISLANDS,
            'iso' => 'VG',
            'name' => 'British Virgin Islands',
        ],
        self::BRUNEI => ['id' => self::BRUNEI, 'iso' => 'BN', 'name' => 'Brunei',],
        self::BULGARIA => ['id' => self::BULGARIA, 'iso' => 'BG', 'name' => 'Bulgaria',],
        self::BURKINA_FASO => ['id' => self::BURKINA_FASO, 'iso' => 'BF', 'name' => 'Burkina Faso',],
        self::BURUNDI => ['id' => self::BURUNDI, 'iso' => 'BI', 'name' => 'Burundi',],
        self::CAMBODIA => ['id' => self::CAMBODIA, 'iso' => 'KH', 'name' => 'Cambodia',],
        self::CAMEROON => ['id' => self::CAMEROON, 'iso' => 'CM', 'name' => 'Cameroon',],
        self::CANADA => ['id' => self::CANADA, 'iso' => 'CA', 'name' => 'Canada',],
        self::CANARY_ISLANDS => ['id' => self::CANARY_ISLANDS, 'iso' => 'IC', 'name' => 'Canary Islands',],
        self::CAPE_VERDE => ['id' => self::CAPE_VERDE, 'iso' => 'CV', 'name' => 'Cape Verde',],
        self::CARIBBEAN_NETHERLANDS => [
            'id' => self::CARIBBEAN_NETHERLANDS,
            'iso' => 'BQ',
            'name' => 'Caribbean Netherlands',
        ],
        self::CAYMAN_ISLANDS => ['id' => self::CAYMAN_ISLANDS, 'iso' => 'KY', 'name' => 'Cayman Islands',],
        self::CENTRAL_AFRICAN_REPUBLIC => [
            'id' => self::CENTRAL_AFRICAN_REPUBLIC,
            'iso' => 'CF',
            'name' => 'Central African Republic',
        ],
        self::CEUTA_AND_MELILLA => ['id' => self::CEUTA_AND_MELILLA, 'iso' => 'EA', 'name' => 'Ceuta & Melilla',],
        self::CHAD => ['id' => self::CHAD, 'iso' => 'TD', 'name' => 'Chad',],
        self::CHILE => ['id' => self::CHILE, 'iso' => 'CL', 'name' => 'Chile',],
        self::CHINA => ['id' => self::CHINA, 'iso' => 'CN', 'name' => 'China',],
        self::CHRISTMAS_ISLAND => ['id' => self::CHRISTMAS_ISLAND, 'iso' => 'CX', 'name' => 'Christmas Island',],
        self::COCOS_KEELING_ISLANDS => [
            'id' => self::COCOS_KEELING_ISLANDS,
            'iso' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
        ],
        self::COLOMBIA => ['id' => self::COLOMBIA, 'iso' => 'CO', 'name' => 'Colombia',],
        self::COMOROS => ['id' => self::COMOROS, 'iso' => 'KM', 'name' => 'Comoros',],
        self::CONGO_BRAZZAVILLE => ['id' => self::CONGO_BRAZZAVILLE, 'iso' => 'CG', 'name' => 'Congo - Brazzaville',],
        self::CONGO_KINSHASA => ['id' => self::CONGO_KINSHASA, 'iso' => 'CD', 'name' => 'Congo - Kinshasa',],
        self::COOK_ISLANDS => ['id' => self::COOK_ISLANDS, 'iso' => 'CK', 'name' => 'Cook Islands',],
        self::COSTA_RICA => ['id' => self::COSTA_RICA, 'iso' => 'CR', 'name' => 'Costa Rica',],
        self::COTE_D_IVOIRE => ['id' => self::COTE_D_IVOIRE, 'iso' => 'CI', 'name' => 'Cote d’Ivoire',],
        self::CROATIA => ['id' => self::CROATIA, 'iso' => 'HR', 'name' => 'Croatia',],
        self::CUBA => ['id' => self::CUBA, 'iso' => 'CU', 'name' => 'Cuba',],
        self::CURACAO => ['id' => self::CURACAO, 'iso' => 'CW', 'name' => 'Curacao',],
        self::CYPRUS => ['id' => self::CYPRUS, 'iso' => 'CY', 'name' => 'Cyprus',],
        self::CZECH_REPUBLIC => ['id' => self::CZECH_REPUBLIC, 'iso' => 'CZ', 'name' => 'Czech Republic',],
        self::DENMARK => ['id' => self::DENMARK, 'iso' => 'DK', 'name' => 'Denmark',],
        self::DIEGO_GARCIA => ['id' => self::DIEGO_GARCIA, 'iso' => 'DG', 'name' => 'Diego Garcia',],
        self::DJIBOUTI => ['id' => self::DJIBOUTI, 'iso' => 'DJ', 'name' => 'Djibouti',],
        self::DOMINICA => ['id' => self::DOMINICA, 'iso' => 'DM', 'name' => 'Dominica',],
        self::DOMINICAN_REPUBLIC => ['id' => self::DOMINICAN_REPUBLIC, 'iso' => 'DO', 'name' => 'Dominican Republic',],
        self::ECUADOR => ['id' => self::ECUADOR, 'iso' => 'EC', 'name' => 'Ecuador',],
        self::EGYPT => ['id' => self::EGYPT, 'iso' => 'EG', 'name' => 'Egypt',],
        self::EL_SALVADOR => ['id' => self::EL_SALVADOR, 'iso' => 'SV', 'name' => 'El Salvador',],
        self::EQUATORIAL_GUINEA => ['id' => self::EQUATORIAL_GUINEA, 'iso' => 'GQ', 'name' => 'Equatorial Guinea',],
        self::ERITREA => ['id' => self::ERITREA, 'iso' => 'ER', 'name' => 'Eritrea',],
        self::ESTONIA => ['id' => self::ESTONIA, 'iso' => 'EE', 'name' => 'Estonia',],
        self::ETHIOPIA => ['id' => self::ETHIOPIA, 'iso' => 'ET', 'name' => 'Ethiopia',],
        self::FALKLAND_ISLANDS => ['id' => self::FALKLAND_ISLANDS, 'iso' => 'FK', 'name' => 'Falkland Islands',],
        self::FAROE_ISLANDS => ['id' => self::FAROE_ISLANDS, 'iso' => 'FO', 'name' => 'Faroe Islands',],
        self::FIJI => ['id' => self::FIJI, 'iso' => 'FJ', 'name' => 'Fiji',],
        self::FINLAND => ['id' => self::FINLAND, 'iso' => 'FI', 'name' => 'Finland',],
        self::FRANCE => ['id' => self::FRANCE, 'iso' => 'FR', 'name' => 'France',],
        self::FRENCH_GUIANA => ['id' => self::FRENCH_GUIANA, 'iso' => 'GF', 'name' => 'French Guiana',],
        self::FRENCH_POLYNESIA => ['id' => self::FRENCH_POLYNESIA, 'iso' => 'PF', 'name' => 'French Polynesia',],
        self::FRENCH_SOUTHERN_TERRITORIES => [
            'id' => self::FRENCH_SOUTHERN_TERRITORIES,
            'iso' => 'TF',
            'name' => 'French Southern Territories',
        ],
        self::GABON => ['id' => self::GABON, 'iso' => 'GA', 'name' => 'Gabon',],
        self::GAMBIA => ['id' => self::GAMBIA, 'iso' => 'GM', 'name' => 'Gambia',],
        self::GEORGIA => ['id' => self::GEORGIA, 'iso' => 'GE', 'name' => 'Georgia',],
        self::GERMANY => ['id' => self::GERMANY, 'iso' => 'DE', 'name' => 'Germany',],
        self::GHANA => ['id' => self::GHANA, 'iso' => 'GH', 'name' => 'Ghana',],
        self::GIBRALTAR => ['id' => self::GIBRALTAR, 'iso' => 'GI', 'name' => 'Gibraltar',],
        self::GREECE => ['id' => self::GREECE, 'iso' => 'GR', 'name' => 'Greece',],
        self::GREENLAND => ['id' => self::GREENLAND, 'iso' => 'GL', 'name' => 'Greenland',],
        self::GRENADA => ['id' => self::GRENADA, 'iso' => 'GD', 'name' => 'Grenada',],
        self::GUADELOUPE => ['id' => self::GUADELOUPE, 'iso' => 'GP', 'name' => 'Guadeloupe',],
        self::GUAM => ['id' => self::GUAM, 'iso' => 'GU', 'name' => 'Guam',],
        self::GUATEMALA => ['id' => self::GUATEMALA, 'iso' => 'GT', 'name' => 'Guatemala',],
        self::GUERNSEY => ['id' => self::GUERNSEY, 'iso' => 'GG', 'name' => 'Guernsey',],
        self::GUINEA => ['id' => self::GUINEA, 'iso' => 'GN', 'name' => 'Guinea',],
        self::GUINEA_BISSAU => ['id' => self::GUINEA_BISSAU, 'iso' => 'GW', 'name' => 'Guinea-Bissau',],
        self::GUYANA => ['id' => self::GUYANA, 'iso' => 'GY', 'name' => 'Guyana',],
        self::HAITI => ['id' => self::HAITI, 'iso' => 'HT', 'name' => 'Haiti',],
        self::HONDURAS => ['id' => self::HONDURAS, 'iso' => 'HN', 'name' => 'Honduras',],
        self::HONG_KONG_SAR_CHINA => [
            'id' => self::HONG_KONG_SAR_CHINA,
            'iso' => 'HK',
            'name' => 'Hong Kong SAR China',
        ],
        self::HUNGARY => ['id' => self::HUNGARY, 'iso' => 'HU', 'name' => 'Hungary',],
        self::ICELAND => ['id' => self::ICELAND, 'iso' => 'IS', 'name' => 'Iceland',],
        self::INDIA => ['id' => self::INDIA, 'iso' => 'IN', 'name' => 'India',],
        self::INDONESIA => ['id' => self::INDONESIA, 'iso' => 'ID', 'name' => 'Indonesia',],
        self::IRAN => ['id' => self::IRAN, 'iso' => 'IR', 'name' => 'Iran',],
        self::IRAQ => ['id' => self::IRAQ, 'iso' => 'IQ', 'name' => 'Iraq',],
        self::IRELAND => ['id' => self::IRELAND, 'iso' => 'IE', 'name' => 'Ireland',],
        self::ISLE_OF_MAN => ['id' => self::ISLE_OF_MAN, 'iso' => 'IM', 'name' => 'Isle of Man',],
        self::ISRAEL => ['id' => self::ISRAEL, 'iso' => 'IL', 'name' => 'Israel',],
        self::ITALY => ['id' => self::ITALY, 'iso' => 'IT', 'name' => 'Italy',],
        self::JAMAICA => ['id' => self::JAMAICA, 'iso' => 'JM', 'name' => 'Jamaica',],
        self::JAPAN => ['id' => self::JAPAN, 'iso' => 'JP', 'name' => 'Japan',],
        self::JERSEY => ['id' => self::JERSEY, 'iso' => 'JE', 'name' => 'Jersey',],
        self::JORDAN => ['id' => self::JORDAN, 'iso' => 'JO', 'name' => 'Jordan',],
        self::KAZAKHSTAN => ['id' => self::KAZAKHSTAN, 'iso' => 'KZ', 'name' => 'Kazakhstan',],
        self::KENYA => ['id' => self::KENYA, 'iso' => 'KE', 'name' => 'Kenya',],
        self::KIRIBATI => ['id' => self::KIRIBATI, 'iso' => 'KI', 'name' => 'Kiribati',],
        self::KOSOVO => ['id' => self::KOSOVO, 'iso' => 'XK', 'name' => 'Kosovo',],
        self::KUWAIT => ['id' => self::KUWAIT, 'iso' => 'KW', 'name' => 'Kuwait',],
        self::KYRGYZSTAN => ['id' => self::KYRGYZSTAN, 'iso' => 'KG', 'name' => 'Kyrgyzstan',],
        self::LAOS => ['id' => self::LAOS, 'iso' => 'LA', 'name' => 'Laos',],
        self::LATVIA => ['id' => self::LATVIA, 'iso' => 'LV', 'name' => 'Latvia',],
        self::LEBANON => ['id' => self::LEBANON, 'iso' => 'LB', 'name' => 'Lebanon',],
        self::LESOTHO => ['id' => self::LESOTHO, 'iso' => 'LS', 'name' => 'Lesotho',],
        self::LIBERIA => ['id' => self::LIBERIA, 'iso' => 'LR', 'name' => 'Liberia',],
        self::LIBYA => ['id' => self::LIBYA, 'iso' => 'LY', 'name' => 'Libya',],
        self::LIECHTENSTEIN => ['id' => self::LIECHTENSTEIN, 'iso' => 'LI', 'name' => 'Liechtenstein',],
        self::LITHUANIA => ['id' => self::LITHUANIA, 'iso' => 'LT', 'name' => 'Lithuania',],
        self::LUXEMBOURG => ['id' => self::LUXEMBOURG, 'iso' => 'LU', 'name' => 'Luxembourg',],
        self::MACAU_SAR_CHINA => ['id' => self::MACAU_SAR_CHINA, 'iso' => 'MO', 'name' => 'Macau SAR China',],
        self::MACEDONIA => ['id' => self::MACEDONIA, 'iso' => 'MK', 'name' => 'Macedonia',],
        self::MADAGASCAR => ['id' => self::MADAGASCAR, 'iso' => 'MG', 'name' => 'Madagascar',],
        self::MALAWI => ['id' => self::MALAWI, 'iso' => 'MW', 'name' => 'Malawi',],
        self::MALAYSIA => ['id' => self::MALAYSIA, 'iso' => 'MY', 'name' => 'Malaysia',],
        self::MALDIVES => ['id' => self::MALDIVES, 'iso' => 'MV', 'name' => 'Maldives',],
        self::MALI => ['id' => self::MALI, 'iso' => 'ML', 'name' => 'Mali',],
        self::MALTA => ['id' => self::MALTA, 'iso' => 'MT', 'name' => 'Malta',],
        self::MARSHALL_ISLANDS => ['id' => self::MARSHALL_ISLANDS, 'iso' => 'MH', 'name' => 'Marshall Islands',],
        self::MARTINIQUE => ['id' => self::MARTINIQUE, 'iso' => 'MQ', 'name' => 'Martinique',],
        self::MAURITANIA => ['id' => self::MAURITANIA, 'iso' => 'MR', 'name' => 'Mauritania',],
        self::MAURITIUS => ['id' => self::MAURITIUS, 'iso' => 'MU', 'name' => 'Mauritius',],
        self::MAYOTTE => ['id' => self::MAYOTTE, 'iso' => 'YT', 'name' => 'Mayotte',],
        self::MEXICO => ['id' => self::MEXICO, 'iso' => 'MX', 'name' => 'Mexico',],
        self::MICRONESIA => ['id' => self::MICRONESIA, 'iso' => 'FM', 'name' => 'Micronesia',],
        self::MOLDOVA => ['id' => self::MOLDOVA, 'iso' => 'MD', 'name' => 'Moldova',],
        self::MONACO => ['id' => self::MONACO, 'iso' => 'MC', 'name' => 'Monaco',],
        self::MONGOLIA => ['id' => self::MONGOLIA, 'iso' => 'MN', 'name' => 'Mongolia',],
        self::MONTENEGRO => ['id' => self::MONTENEGRO, 'iso' => 'ME', 'name' => 'Montenegro',],
        self::MONTSERRAT => ['id' => self::MONTSERRAT, 'iso' => 'MS', 'name' => 'Montserrat',],
        self::MOROCCO => ['id' => self::MOROCCO, 'iso' => 'MA', 'name' => 'Morocco',],
        self::MOZAMBIQUE => ['id' => self::MOZAMBIQUE, 'iso' => 'MZ', 'name' => 'Mozambique',],
        self::MYANMAR => ['id' => self::MYANMAR, 'iso' => 'MM', 'name' => 'Myanmar (Burma)',],
        self::NAMIBIA => ['id' => self::NAMIBIA, 'iso' => 'NA', 'name' => 'Namibia',],
        self::NAURU => ['id' => self::NAURU, 'iso' => 'NR', 'name' => 'Nauru',],
        self::NEPAL => ['id' => self::NEPAL, 'iso' => 'NP', 'name' => 'Nepal',],
        self::NETHERLANDS => ['id' => self::NETHERLANDS, 'iso' => 'NL', 'name' => 'Netherlands',],
        self::NEW_CALEDONIA => ['id' => self::NEW_CALEDONIA, 'iso' => 'NC', 'name' => 'New Caledonia',],
        self::NEW_ZEALAND => ['id' => self::NEW_ZEALAND, 'iso' => 'NZ', 'name' => 'New Zealand',],
        self::NICARAGUA => ['id' => self::NICARAGUA, 'iso' => 'NI', 'name' => 'Nicaragua',],
        self::NIGER => ['id' => self::NIGER, 'iso' => 'NE', 'name' => 'Niger',],
        self::NIGERIA => ['id' => self::NIGERIA, 'iso' => 'NG', 'name' => 'Nigeria',],
        self::NIUE => ['id' => self::NIUE, 'iso' => 'NU', 'name' => 'Niue',],
        self::NORFOLK_ISLAND => ['id' => self::NORFOLK_ISLAND, 'iso' => 'NF', 'name' => 'Norfolk Island',],
        self::NORTH_KOREA => ['id' => self::NORTH_KOREA, 'iso' => 'KP', 'name' => 'North Korea',],
        self::NORTHERN_MARIANA_ISLANDS => [
            'id' => self::NORTHERN_MARIANA_ISLANDS,
            'iso' => 'MP',
            'name' => 'Northern Mariana Islands',
        ],
        self::NORWAY => ['id' => self::NORWAY, 'iso' => 'NO', 'name' => 'Norway',],
        self::OMAN => ['id' => self::OMAN, 'iso' => 'OM', 'name' => 'Oman',],
        self::PAKISTAN => ['id' => self::PAKISTAN, 'iso' => 'PK', 'name' => 'Pakistan',],
        self::PALAU => ['id' => self::PALAU, 'iso' => 'PW', 'name' => 'Palau',],
        self::PALESTINIAN_TERRITORIES => [
            'id' => self::PALESTINIAN_TERRITORIES,
            'iso' => 'PS',
            'name' => 'Palestinian Territories',
        ],
        self::PANAMA => ['id' => self::PANAMA, 'iso' => 'PA', 'name' => 'Panama',],
        self::PAPUA_NEW_GUINEA => ['id' => self::PAPUA_NEW_GUINEA, 'iso' => 'PG', 'name' => 'Papua New Guinea',],
        self::PARAGUAY => ['id' => self::PARAGUAY, 'iso' => 'PY', 'name' => 'Paraguay',],
        self::PERU => ['id' => self::PERU, 'iso' => 'PE', 'name' => 'Peru',],
        self::PHILIPPINES => ['id' => self::PHILIPPINES, 'iso' => 'PH', 'name' => 'Philippines',],
        self::PITCAIRN_ISLANDS => ['id' => self::PITCAIRN_ISLANDS, 'iso' => 'PN', 'name' => 'Pitcairn Islands',],
        self::POLAND => ['id' => self::POLAND, 'iso' => 'PL', 'name' => 'Poland',],
        self::PORTUGAL => ['id' => self::PORTUGAL, 'iso' => 'PT', 'name' => 'Portugal',],
        self::PUERTO_RICO => ['id' => self::PUERTO_RICO, 'iso' => 'PR', 'name' => 'Puerto Rico',],
        self::QATAR => ['id' => self::QATAR, 'iso' => 'QA', 'name' => 'Qatar',],
        self::REUNION => ['id' => self::REUNION, 'iso' => 'RE', 'name' => 'Reunion',],
        self::ROMANIA => ['id' => self::ROMANIA, 'iso' => 'RO', 'name' => 'Romania',],
        self::RUSSIA => ['id' => self::RUSSIA, 'iso' => 'RU', 'name' => 'Russia',],
        self::RWANDA => ['id' => self::RWANDA, 'iso' => 'RW', 'name' => 'Rwanda',],
        self::SAMOA => ['id' => self::SAMOA, 'iso' => 'WS', 'name' => 'Samoa',],
        self::SAN_MARINO => ['id' => self::SAN_MARINO, 'iso' => 'SM', 'name' => 'San Marino',],
        self::SAO_TOME_AND_PRINCIPE => [
            'id' => self::SAO_TOME_AND_PRINCIPE,
            'iso' => 'ST',
            'name' => 'São Tome & Principe',
        ],
        self::SAUDI_ARABIA => ['id' => self::SAUDI_ARABIA, 'iso' => 'SA', 'name' => 'Saudi Arabia',],
        self::SENEGAL => ['id' => self::SENEGAL, 'iso' => 'SN', 'name' => 'Senegal',],
        self::SERBIA => ['id' => self::SERBIA, 'iso' => 'RS', 'name' => 'Serbia',],
        self::SEYCHELLES => ['id' => self::SEYCHELLES, 'iso' => 'SC', 'name' => 'Seychelles',],
        self::SIERRA_LEONE => ['id' => self::SIERRA_LEONE, 'iso' => 'SL', 'name' => 'Sierra Leone',],
        self::SINGAPORE => ['id' => self::SINGAPORE, 'iso' => 'SG', 'name' => 'Singapore',],
        self::SINT_MAARTEN => ['id' => self::SINT_MAARTEN, 'iso' => 'SX', 'name' => 'Sint Maarten',],
        self::SLOVAKIA => ['id' => self::SLOVAKIA, 'iso' => 'SK', 'name' => 'Slovakia',],
        self::SLOVENIA => ['id' => self::SLOVENIA, 'iso' => 'SI', 'name' => 'Slovenia',],
        self::SOLOMON_ISLANDS => ['id' => self::SOLOMON_ISLANDS, 'iso' => 'SB', 'name' => 'Solomon Islands',],
        self::SOMALIA => ['id' => self::SOMALIA, 'iso' => 'SO', 'name' => 'Somalia',],
        self::SOUTH_AFRICA => ['id' => self::SOUTH_AFRICA, 'iso' => 'ZA', 'name' => 'South Africa',],
        self::SOUTH_GEORGIA_AND_SOUTH_SANDWICH_ISLANDS => [
            'id' => self::SOUTH_GEORGIA_AND_SOUTH_SANDWICH_ISLANDS,
            'iso' => 'GS',
            'name' => 'South Georgia & South Sandwich Islands',
        ],
        self::SOUTH_KOREA => ['id' => self::SOUTH_KOREA, 'iso' => 'KR', 'name' => 'South Korea',],
        self::SOUTH_SUDAN => ['id' => self::SOUTH_SUDAN, 'iso' => 'SS', 'name' => 'South Sudan',],
        self::SPAIN => ['id' => self::SPAIN, 'iso' => 'ES', 'name' => 'Spain',],
        self::SRI_LANKA => ['id' => self::SRI_LANKA, 'iso' => 'LK', 'name' => 'Sri Lanka',],
        self::ST_BARTHELEMY => ['id' => self::ST_BARTHELEMY, 'iso' => 'BL', 'name' => 'St. Barthelemy',],
        self::ST_HELENA => ['id' => self::ST_HELENA, 'iso' => 'SH', 'name' => 'St. Helena',],
        self::ST_KITTS_AND_NEVIS => ['id' => self::ST_KITTS_AND_NEVIS, 'iso' => 'KN', 'name' => 'St. Kitts & Nevis',],
        self::ST_LUCIA => ['id' => self::ST_LUCIA, 'iso' => 'LC', 'name' => 'St. Lucia',],
        self::ST_MARTIN => ['id' => self::ST_MARTIN, 'iso' => 'MF', 'name' => 'St. Martin',],
        self::ST_PIERRE_AND_MIQUELON => [
            'id' => self::ST_PIERRE_AND_MIQUELON,
            'iso' => 'PM',
            'name' => 'St. Pierre & Miquelon',
        ],
        self::ST_VINCENT_AND_GRENADINES => [
            'id' => self::ST_VINCENT_AND_GRENADINES,
            'iso' => 'VC',
            'name' => 'St. Vincent & Grenadines',
        ],
        self::SUDAN => ['id' => self::SUDAN, 'iso' => 'SD', 'name' => 'Sudan',],
        self::SURINAME => ['id' => self::SURINAME, 'iso' => 'SR', 'name' => 'Suriname',],
        self::SVALBARD_AND_JAN_MAYEN => [
            'id' => self::SVALBARD_AND_JAN_MAYEN,
            'iso' => 'SJ',
            'name' => 'Svalbard & Jan Mayen',
        ],
        self::SWAZILAND => ['id' => self::SWAZILAND, 'iso' => 'SZ', 'name' => 'Swaziland',],
        self::SWEDEN => ['id' => self::SWEDEN, 'iso' => 'SE', 'name' => 'Sweden',],
        self::SWITZERLAND => ['id' => self::SWITZERLAND, 'iso' => 'CH', 'name' => 'Switzerland',],
        self::SYRIA => ['id' => self::SYRIA, 'iso' => 'SY', 'name' => 'Syria',],
        self::TAIWAN => ['id' => self::TAIWAN, 'iso' => 'TW', 'name' => 'Taiwan',],
        self::TAJIKISTAN => ['id' => self::TAJIKISTAN, 'iso' => 'TJ', 'name' => 'Tajikistan',],
        self::TANZANIA => ['id' => self::TANZANIA, 'iso' => 'TZ', 'name' => 'Tanzania',],
        self::THAILAND => ['id' => self::THAILAND, 'iso' => 'TH', 'name' => 'Thailand',],
        self::TIMOR_LESTE => ['id' => self::TIMOR_LESTE, 'iso' => 'TL', 'name' => 'Timor-Leste',],
        self::TOGO => ['id' => self::TOGO, 'iso' => 'TG', 'name' => 'Togo',],
        self::TOKELAU => ['id' => self::TOKELAU, 'iso' => 'TK', 'name' => 'Tokelau',],
        self::TONGA => ['id' => self::TONGA, 'iso' => 'TO', 'name' => 'Tonga',],
        self::TRINIDAD_AND_TOBAGO => ['id' => self::TRINIDAD_AND_TOBAGO, 'iso' => 'TT', 'name' => 'Trinidad & Tobago',],
        self::TRISTAN_DA_CUNHA => ['id' => self::TRISTAN_DA_CUNHA, 'iso' => 'TA', 'name' => 'Tristan da Cunha',],
        self::TUNISIA => ['id' => self::TUNISIA, 'iso' => 'TN', 'name' => 'Tunisia',],
        self::TURKEY => ['id' => self::TURKEY, 'iso' => 'TR', 'name' => 'Turkey',],
        self::TURKMENISTAN => ['id' => self::TURKMENISTAN, 'iso' => 'TM', 'name' => 'Turkmenistan',],
        self::TURKS_AND_CAICOS_ISLANDS => [
            'id' => self::TURKS_AND_CAICOS_ISLANDS,
            'iso' => 'TC',
            'name' => 'Turks & Caicos Islands',
        ],
        self::TUVALU => ['id' => self::TUVALU, 'iso' => 'TV', 'name' => 'Tuvalu',],
        self::US_OUTLYING_ISLANDS => [
            'id' => self::US_OUTLYING_ISLANDS,
            'iso' => 'UM',
            'name' => 'U.S. Outlying Islands',
        ],
        self::US_VIRGIN_ISLANDS => ['id' => self::US_VIRGIN_ISLANDS, 'iso' => 'VI', 'name' => 'U.S. Virgin Islands',],
        self::UGANDA => ['id' => self::UGANDA, 'iso' => 'UG', 'name' => 'Uganda',],
        self::UKRAINE => ['id' => self::UKRAINE, 'iso' => 'UA', 'name' => 'Ukraine',],
        self::UNITED_ARAB_EMIRATES => [
            'id' => self::UNITED_ARAB_EMIRATES,
            'iso' => 'AE',
            'name' => 'United Arab Emirates',
        ],
        self::UNITED_KINGDOM => ['id' => self::UNITED_KINGDOM, 'iso' => 'GB', 'name' => 'United Kingdom',],
        self::UNITED_STATES => ['id' => self::UNITED_STATES, 'iso' => 'US', 'name' => 'United States',],
        self::URUGUAY => ['id' => self::URUGUAY, 'iso' => 'UY', 'name' => 'Uruguay',],
        self::UZBEKISTAN => ['id' => self::UZBEKISTAN, 'iso' => 'UZ', 'name' => 'Uzbekistan',],
        self::VANUATU => ['id' => self::VANUATU, 'iso' => 'VU', 'name' => 'Vanuatu',],
        self::VATICAN_CITY => ['id' => self::VATICAN_CITY, 'iso' => 'VA', 'name' => 'Vatican City',],
        self::VENEZUELA => ['id' => self::VENEZUELA, 'iso' => 'VE', 'name' => 'Venezuela',],
        self::VIETNAM => ['id' => self::VIETNAM, 'iso' => 'VN', 'name' => 'Vietnam',],
        self::WALLIS_AND_FUTUNA => ['id' => self::WALLIS_AND_FUTUNA, 'iso' => 'WF', 'name' => 'Wallis & Futuna',],
        self::WESTERN_SAHARA => ['id' => self::WESTERN_SAHARA, 'iso' => 'EH', 'name' => 'Western Sahara',],
        self::YEMEN => ['id' => self::YEMEN, 'iso' => 'YE', 'name' => 'Yemen',],
        self::ZAMBIA => ['id' => self::ZAMBIA, 'iso' => 'ZM', 'name' => 'Zambia',],
        self::ZIMBABWE => ['id' => self::ZIMBABWE, 'iso' => 'ZW', 'name' => 'Zimbabwe',],
        self::ANONYMOUS_PROXY => ['id' => self::ANONYMOUS_PROXY, 'iso' => 'A1', 'name' => 'Anonymous Proxy',],
        self::SATELLITE_PROVIDER => ['id' => self::SATELLITE_PROVIDER, 'iso' => 'A2', 'name' => 'Satellite Provider',],
        self::OTHER_COUNTRY => ['id' => self::OTHER_COUNTRY, 'iso' => 'O1', 'name' => 'Other Country',],
        self::ASIA_PACIFIC_REGION => ['id' => self::ASIA_PACIFIC_REGION, 'iso' => 'AP', 'name' => 'Asia/Pacific Region',],
        self::EUROPE => ['id' => self::EUROPE, 'iso' => 'EU', 'name' => 'Europe',],
    ];

    /**
     * Get array of countries id
     *
     * @return mixed
     */
    public static function getCountryIdList()
    {
        return array_keys(self::$isoList);
    }

    /**
     * Get array of countries iso
     *
     * @return array
     */
    public static function getCountryIsoList()
    {
        return self::$isoList;
    }

    /**
     * Get array of countries name
     *
     * @return array
     */
    public static function getCountryNameList()
    {
        return self::$nameList;
    }

    /**
     * Get array of countries
     *
     * @return array
     */
    public static function getCountryList()
    {
        return self::$countryList;
    }

    /**
     * Get english short country name by id
     *
     * @param integer $countryId
     * @return string|null
     */
    public static function getCountryNameById($countryId)
    {
        return array_key_exists($countryId, self::$nameList) ? self::$nameList[$countryId] : null;
    }

    /**
     * Get ISO 3166-1 alpha-2 country code by id
     *
     * @param integer $countryId
     * @return string|null
     */
    public static function getCountryIsoById($countryId)
    {
        return array_key_exists($countryId, self::$isoList) ? self::$isoList[$countryId] : null;
    }

    /**
     * Get country id by ISO 3166-1 alpha-2 country code. Return id of "Unknown" country on code not exists
     *
     * @param string $iso ISO 3166-1 alpha-2 country code
     * @return int
     */
    public static function getIdByCountryIsoCode($iso)
    {

        return (int)array_search(strtoupper($iso), self::$isoList);
    }
}
