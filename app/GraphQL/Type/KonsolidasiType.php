<?php

namespace App\GraphQL\Type;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class KonsolidasiType extends GraphQLType {

    protected $attributes = [
        'name' => 'Konsolidasi',
        'description' => 'Sebuah tabel yang berisikan data kota bandung'
    ];

    /*
     * Uncomment following line to make the type input object.
     * http://graphql.org/learn/schema/#input-types
     */
    // protected $inputObject = true;

    public function fields()
    {
        return [
            'id_wilayah' => [
                'type' => Type::string(),
                'description' => 'ID dari suatu wilayah'
            ],
            'nama_wilayah' => [
                'type' => Type::string(),
                'description' => 'Nama dari suatu wilayah'
            ],
            'id_kecamatan' => [
                'type' => Type::string(),
                'description' => 'ID dari suatu kecamatan'
            ],
            'nama_kecamatan' => [
                'type' => Type::string(),
                'description' => 'Nama dari suatu kecamatan'
            ],
            'id_kelurahan' => [
                'type' => Type::string(),
                'description' => 'ID dari suatu kelurahan'
            ],
            'nama_kelurahan' => [
                'type' => Type::string(),
                'description' => 'Nama dari suatu kelurahan'
            ],
            'kodepos' => [
                'type' => Type::int(),
                'description' => 'Kodepos dari suatu ...'
            ],
            'jumlah_rw' => [
                'type' => Type::int(),
                'description' => 'Jumlah RW dari suatu ...'
            ],
            'jumlah_rt' => [
                'type' => Type::int(),
                'description' => 'Jumlah RT dari suatu ...'
            ],
            'kode_kemendagri' => [
                'type' => Type::string(),
                'description' => 'Kode kemendagri dari suatu ...'
            ],
            'jumlah_penduduk' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk di suatu ...'
            ],
            'jumlah_kk' => [
                'type' => Type::int(),
                'description' => 'Jumlah Kepala Keluarga / Kartu Keluarga di suatu ...'
            ],
            'luas_wilayah' => [
                'type' => Type::int(),
                'description' => 'Luas suatu wilayah (m2)'
            ],
            'kepadatan' => [
                'type' => Type::int(),
                'description' => 'Kepadatan di suatu ...'
            ],
            'perpindahan' => [
                'type' => Type::int(),
                'description' => 'null'
            ],
            'jumlah_meninggal' => [
                'type' => Type::int(),
                'description' => 'Jumlah meninggalnya jiwa di suatu ...'
            ],
            'perubahan' => [
                'type' => Type::string(),
                'description' => 'null'
            ],
            'wajib_ktp' => [
                'type' => Type::string(),
                'description' => 'null'
            ],
            'agama_islam' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk beragama islam di suatu ...'
            ],
            'agama_kristen' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk beragama kristen di suatu ...'
            ],
            'agama_katholik' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk beragama katholik di suatu ...'
            ],
            'agama_hindu' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk beragama hindu di suatu ...'
            ],
            'agama_budha' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk beragama budha di suatu ...'
            ],
            'agama_konghucu' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk beragama konghucu di suatu ...'
            ],
            'kepercayaan_lainnya' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk berkeyakinan lainnya di suatu ...'
            ],
            'jumlah_pria' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk berjenis kelamin pria di suatu ...'
            ],
            'jumlah_wanita' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk berjenis kelamin wanita di suatu ...'
            ],
            'belum_kawin' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang belum kawin di suatu ...'
            ],
            'kawin' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang sudah kawin di suatu ...'
            ],
            'cerai_hidup' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang ... di suatu ...'
            ],
            'cerai_mati' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang ... di suatu ...'
            ],
            'usia_0_4' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 0 - 4 tahun di suatu ...'
            ],
            'usia_5_9' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 5 - 9 tahun di suatu ...'
            ],
            'usia_10_14' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 10 - 14 tahun di suatu ...'
            ],
            'usia_15_19' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 15 - 19 tahun di suatu ...'
            ],
            'usia_20_24' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 20 - 24 tahun di suatu ...'
            ],
            'usia_25_29' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 25 - 29 tahun di suatu ...'
            ],
            'usia_30_34' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 30 - 34 tahun di suatu ...'
            ],
            'usia_35_39' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 35 - 39 tahun di suatu ...'
            ],
            'usia_30_34' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 30 - 34 tahun di suatu ...'
            ],
            'usia_35_39' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 35 - 39 tahun di suatu ...'
            ],
            'usia_40_44' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 40 - 44 tahun di suatu ...'
            ],
            'usia_45_49' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 45 - 49 tahun di suatu ...'
            ],
            'usia_50_54' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 50 - 54 tahun di suatu ...'
            ],
            'usia_55_59' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 55 - 59 tahun di suatu ...'
            ],
            'usia_60_64' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 60 - 64 tahun di suatu ...'
            ],
            'usia_65_69' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 65 - 69 tahun di suatu ...'
            ],
            'usia_70_74' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 70 - 74 tahun di suatu ...'
            ],
            'usia_75_keatas' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang berusia 75 tahun keatas di suatu ...'
            ],
            'lahir_2013' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang ... di suatu ...'
            ],
            'lahir_sblm_2013' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang ... di suatu ...'
            ],
            'lahir_2014' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang ... di suatu ...'
            ],
            'lahir_sblm_2014' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang ... di suatu ...'
            ],
            'lahir_2015' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang ... di suatu ...'
            ],
            'lahir_sblm_2015' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang ... di suatu ...'
            ],
            'lahir_2016' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang ... di suatu ...'
            ],
            'lahir_sblm_2016' => [
                'type' => Type::int(),
                'description' => 'Jumlah penduduk yang ... di suatu ...'
            ],
            'pertumbuhan_penduduk_2013' => [
                'type' => Type::int(),
                'description' => 'Pertumbuhan penduduk di tahun 2013'
            ],
            'pertumbuhan_penduduk_2014' => [
                'type' => Type::int(),
                'description' => 'Pertumbuhan penduduk di tahun 2014'
            ],
            'pertumbuhan_penduduk_2015' => [
                'type' => Type::int(),
                'description' => 'Pertumbuhan penduduk di tahun 2015'
            ],
            'pertumbuhan_penduduk_2016' => [
                'type' => Type::int(),
                'description' => 'Pertumbuhan penduduk di tahun 2016'
            ],
            'usia_pendidikan_3_4' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'usia_pendidikan_5' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'usia_pendidikan_6_11' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'usia_pendidikan_12_14' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'usia_pendidikan_15_17' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'usia_pendidikan_18_22' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tidak_belum_sekolah' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'belum_tamat_sd' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tamat_sd' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tamat_smp' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tamat_sma' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tamat_d1_d2' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tamat_d3' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tamat_s1' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tamat_s2' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tamat_s3' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_a' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_b' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_ab' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_o' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_a_plus' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_a_min' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_b_plus' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_b_min' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_ab_plus' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_ab_min' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_o_min' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_o_plus' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'goldar_tidak_diketahui' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'belum_tidak_bekerja' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'pns' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tenaga_pengajar' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'wiraswasta' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'pertanian_perikanan' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'nelayan' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'agama_kepercayaan' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'pelajar_mahasiswa' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'tenaga_kesehatan' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'pensiunan' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'lainnya' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'data_konsolidasi' => [
                'type' => Type::int(),
                'description' => '...'
            ],
            'first' => [
                'type' => Type::int(),
                'description' => 'Limit untuk 5 data pertama'
            ],
            // Nested Resource
            // 'tweets' => [
            //     'args' => [
            //         'id' => [
            //             'type' => Type::int(),
            //             'description' => 'id of the tweet',
            //         ],
            //         'first' => [
            //             'type' => Type::int(),
            //             'description' => 'limit result',
            //         ],
            //     ],
            //     'type' => Type::listOf(GraphQL::type('Tweet')),
            //     'description' => 'tweet description',
            // ],
            // 'profile' => [
            //     'type' => GraphQL::type('Profile'),
            //     'description' => 'user profile',
            // ]
        ];
    }

    // If you want to resolve the field yourself, you can declare a method
    // with the following format resolve[FIELD_NAME]Field()
    protected function resolveEmailField($root, $args)
    {
        return strtolower($root->email);
    }

    protected function resolveCreatedAtField($root, $args)
    {
        return (string) $root->created_at;
    }

    // You can also resolve any nested resource filed in same way
    protected function resolveTweetsField($root, $args)
    {
        $tweets = $root->tweets();

        if (isset($args['id'])) {
            return  $tweets->where('id', $args['id']);
        }

        // check for limit
        if( isset($args['first']) ) {
            $tweets =  $tweets->limit($args['first'])->latest();
        }

        return $tweets->get();
    }

    protected function resolveProfileField($root, $args) {
        return $root->profile;
    }
}