<?php
namespace App\GraphQL\Query;

use GraphQL;
use App\Konsolidasi;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

class KonsolidasiQuery extends Query {

    protected $attributes = [
        'name' => 'users'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Konsolidasi'));
    }

    public function args()
    {
        return [
            'id_wilayah' => [
                'type' => Type::string(),
                'name' => 'id_wilayah'
            ],
            'nama_wilayah' => [
                'type' => Type::string(),
                'name' => 'nama_wilayah'
            ],
            'id_kecamatan' => [
                'type' => Type::string(),
                'name' => 'id_kecamatan'
            ],
            'nama_kecamatan' => [
                'type' => Type::string(),
                'name' => 'nama_kecamatan'
            ],
            'id_kelurahan' => [
                'type' => Type::string(),
                'name' => 'id_kelurahan'
            ],
            'nama_kelurahan' => [
                'type' => Type::string(),
                'name' => 'nama_kelurahan'
            ],
            'kodepos' => [
                'type' => Type::int(),
                'name' => 'kodepos'
            ],
            'jumlah_rw' => [
                'type' => Type::int(),
                'name' => 'jumlah_rw'
            ],
            'jumlah_rt' => [
                'type' => Type::int(),
                'name' => 'jumlah_rt'
            ],
            'kode_kemendagri' => [
                'type' => Type::string(),
                'name' => 'kode_kemendagri'
            ],
            'jumlah_penduduk' => [
                'type' => Type::int(),
                'name' => 'jumlah_penduduk'
            ],
            'jumlah_kk' => [
                'type' => Type::int(),
                'name' => 'jumlah_kk'
            ],
            'luas_wilayah' => [
                'type' => Type::int(),
                'name' => 'luas_wilayah'
            ],
            'kepadatan' => [
                'type' => Type::int(),
                'name' => 'kepadatan'
            ],
            'perpindahan' => [
                'type' => Type::int(),
                'name' => 'perpindahan'
            ],
            'jumlah_meninggal' => [
                'type' => Type::int(),
                'name' => 'jumlah_meninggal'
            ],
            'perubahan' => [
                'type' => Type::string(),
                'name' => 'perubahan'
            ],
            'wajib_ktp' => [
                'type' => Type::string(),
                'name' => 'wajib_ktp'
            ],
            'agama_islam' => [
                'type' => Type::int(),
                'name' => 'agama_islam'
            ],
            'agama_kristen' => [
                'type' => Type::int(),
                'name' => 'agama_kristen'
            ],
            'agama_katholik' => [
                'type' => Type::int(),
                'name' => 'agama_katholik'
            ],
            'agama_hindu' => [
                'type' => Type::int(),
                'name' => 'agama_hindu'
            ],
            'agama_budha' => [
                'type' => Type::int(),
                'name' => 'jumlah_penduduk'
            ],
            'agama_konghucu' => [
                'type' => Type::int(),
                'name' => 'agama_konghucu'
            ],
            'kepercayaan_lainnya' => [
                'type' => Type::int(),
                'name' => 'kepercayaan_lainnya'
            ],
            'jumlah_pria' => [
                'type' => Type::int(),
                'name' => 'jumlah_pria'
            ],
            'jumlah_wanita' => [
                'type' => Type::int(),
                'name' => 'jumlah_wanita'
            ],
            'belum_kawin' => [
                'type' => Type::int(),
                'name' => 'belum_kawin'
            ],
            'kawin' => [
                'type' => Type::int(),
                'name' => 'kawin'
            ],
            'cerai_hidup' => [
                'type' => Type::int(),
                'name' => 'carai_hidup'
            ],
            'cerai_mati' => [
                'type' => Type::int(),
                'name' => 'cerai_mati'
            ],
            'usia_0_4' => [
                'type' => Type::int(),
                'name' => 'usia_0_4'
            ],
            'usia_5_9' => [
                'type' => Type::int(),
                'name' => 'usia_5_9'
            ],
            'usia_10_14' => [
                'type' => Type::int(),
                'name' => 'usia_10_14'
            ],
            'usia_15_19' => [
                'type' => Type::int(),
                'name' => 'usia_15_19'
            ],
            'usia_20_24' => [
                'type' => Type::int(),
                'name' => 'usia_20_24'
            ],
            'usia_25_29' => [
                'type' => Type::int(),
                'name' => 'usia_25_29'
            ],
            'usia_30_34' => [
                'type' => Type::int(),
                'name' => 'usia_30_34'
            ],
            'usia_35_39' => [
                'type' => Type::int(),
                'name' => 'usia_35_39'
            ],
            'usia_30_34' => [
                'type' => Type::int(),
                'name' => 'usia_30_34'
            ],
            'usia_35_39' => [
                'type' => Type::int(),
                'name' => 'usia_35_39'
            ],
            'usia_40_44' => [
                'type' => Type::int(),
                'name' => 'usia_40_44'
            ],
            'usia_45_49' => [
                'type' => Type::int(),
                'name' => 'usia_45_49'
            ],
            'usia_50_54' => [
                'type' => Type::int(),
                'name' => 'usia_50_54'
            ],
            'usia_55_59' => [
                'type' => Type::int(),
                'name' => 'usia_55_59'
            ],
            'usia_60_64' => [
                'type' => Type::int(),
                'name' => 'usia_60_64'
            ],
            'usia_65_69' => [
                'type' => Type::int(),
                'name' => 'usia_65_69'
            ],
            'usia_70_74' => [
                'type' => Type::int(),
                'name' => 'usia_70_74'
            ],
            'usia_75_keatas' => [
                'type' => Type::int(),
                'name' => 'usia_75_keatas'
            ],
            'lahir_2013' => [
                'type' => Type::int(),
                'name' => 'lahir_2013'
            ],
            'lahir_sblm_2013' => [
                'type' => Type::int(),
                'name' => 'lahir_sblm_2013'
            ],
            'lahir_2014' => [
                'type' => Type::int(),
                'name' => 'lahir_2014'
            ],
            'lahir_sblm_2014' => [
                'type' => Type::int(),
                'name' => 'lahir_sblm_2014'
            ],
            'lahir_2015' => [
                'type' => Type::int(),
                'name' => 'lahir_2015'
            ],
            'lahir_sblm_2015' => [
                'type' => Type::int(),
                'name' => 'lahir_sblm_2015'
            ],
            'lahir_2016' => [
                'type' => Type::int(),
                'name' => 'lahir_2016'
            ],
            'lahir_sblm_2016' => [
                'type' => Type::int(),
                'name' => 'lahir_sblm_2016'
            ],
            'pertumbuhan_penduduk_2013' => [
                'type' => Type::int(),
                'name' => 'pertumbuhan_penduduk_2013'
            ],
            'pertumbuhan_penduduk_2014' => [
                'type' => Type::int(),
                'name' => 'pertumbuhan_penduduk_2014'
            ],
            'pertumbuhan_penduduk_2015' => [
                'type' => Type::int(),
                'name' => 'pertumbuhan_penduduk_2015'
            ],
            'pertumbuhan_penduduk_2016' => [
                'type' => Type::int(),
                'name' => 'pertumbuhan_penduduk_2016'
            ],
            'usia_pendidikan_3_4' => [
                'type' => Type::int(),
                'name' => 'usia_pendidikan_3_4'
            ],
            'usia_pendidikan_5' => [
                'type' => Type::int(),
                'name' => 'usia_pendidikan_5'
            ],
            'usia_pendidikan_6_11' => [
                'type' => Type::int(),
                'name' => 'usia_penidikan_6_11'
            ],
            'usia_pendidikan_12_14' => [
                'type' => Type::int(),
                'name' => 'usia_pendidikan_12_14'
            ],
            'usia_pendidikan_15_17' => [
                'type' => Type::int(),
                'name' => 'usia_pendidikan_15_17'
            ],
            'usia_pendidikan_18_22' => [
                'type' => Type::int(),
                'name' => 'usia_pendidikan_18_22'
            ],
            'tidak_belum_sekolah' => [
                'type' => Type::int(),
                'name' => 'tidak_belum_sekolah'
            ],
            'belum_tamat_sd' => [
                'type' => Type::int(),
                'name' => 'belum_tamat_sd'
            ],
            'tamat_sd' => [
                'type' => Type::int(),
                'name' => 'tamat_sd'
            ],
            'tamat_smp' => [
                'type' => Type::int(),
                'name' => 'tamat_smp'
            ],
            'tamat_sma' => [
                'type' => Type::int(),
                'name' => 'tamat_sma'
            ],
            'tamat_d1_d2' => [
                'type' => Type::int(),
                'name' => 'tamat_d1_d2'
            ],
            'tamat_d3' => [
                'type' => Type::int(),
                'name' => 'tamat_d3'
            ],
            'tamat_s1' => [
                'type' => Type::int(),
                'name' => 'tamat_s1'
            ],
            'tamat_s2' => [
                'type' => Type::int(),
                'name' => 'tamat_s2'
            ],
            'tamat_s3' => [
                'type' => Type::int(),
                'name' => 'tamat_s3'
            ],
            'goldar_a' => [
                'type' => Type::int(),
                'name' => 'goldar_a'
            ],
            'goldar_b' => [
                'type' => Type::int(),
                'name' => 'goldar_b'
            ],
            'goldar_ab' => [
                'type' => Type::int(),
                'name' => 'goldar_ab'
            ],
            'goldar_o' => [
                'type' => Type::int(),
                'name' => 'goldar_o'
            ],
            'goldar_a_plus' => [
                'type' => Type::int(),
                'name' => 'goldar_a_plus'
            ],
            'goldar_a_min' => [
                'type' => Type::int(),
                'name' => 'goldar_a_min'
            ],
            'goldar_b_plus' => [
                'type' => Type::int(),
                'name' => 'goldar_b_plus'
            ],
            'goldar_b_min' => [
                'type' => Type::int(),
                'name' => 'goldar_b_min'
            ],
            'goldar_ab_plus' => [
                'type' => Type::int(),
                'name' => 'goldar_ab_plus'
            ],
            'goldar_ab_min' => [
                'type' => Type::int(),
                'name' => 'goldar_ab_min'
            ],
            'goldar_o_min' => [
                'type' => Type::int(),
                'name' => 'goldar_o_min'
            ],
            'goldar_o_plus' => [
                'type' => Type::int(),
                'name' => 'goldar_o_plus'
            ],
            'goldar_tidak_diketahui' => [
                'type' => Type::int(),
                'name' => 'goldar_tidak_diketahui'
            ],
            'belum_tidak_bekerja' => [
                'type' => Type::int(),
                'name' => 'belum_tidak_bekerja'
            ],
            'pns' => [
                'type' => Type::int(),
                'name' => 'pns'
            ],
            'tenaga_pengajar' => [
                'type' => Type::int(),
                'name' => 'tenaga_pengajar'
            ],
            'wiraswasta' => [
                'type' => Type::int(),
                'name' => 'wiraswasta'
            ],
            'pertanian_perikanan' => [
                'type' => Type::int(),
                'name' => 'pertanian_perikanan'
            ],
            'nelayan' => [
                'type' => Type::int(),
                'name' => 'nelayan'
            ],
            'agama_kepercayaan' => [
                'type' => Type::int(),
                'name' => 'agama_kepercayaan'
            ],
            'pelajar_mahasiswa' => [
                'type' => Type::int(),
                'name' => 'pelajar_mahasiswa'
            ],
            'tenaga_kesehatan' => [
                'type' => Type::int(),
                'name' => 'tenaga_kesehatan'
            ],
            'pensiunan' => [
                'type' => Type::int(),
                'name' => 'pensiunan'
            ],
            'lainnya' => [
                'type' => Type::int(),
                'name' => 'lainnya'
            ],
            'data_konsolidasi' => [
                'type' => Type::int(),
                'name' => 'data_konsolidasi'
            ],
            'first' => [
                'name' => 'first',
                'type' => Type::int()
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $konsolidasi = new Konsolidasi;

        // check for limit
        if( isset($args['first']) ) {
            $konsolidasi =  $konsolidasi->limit($args['first'])->latest('id_wilayah');
        }

        if(isset($args['id_wilayah']))
        {
            $konsolidasi = $konsolidasi->where('id_wilayah' , $args['id_wilayah']);
        }

        if(isset($args['nama_wilayah']))
        {
            $konsolidasi = $konsolidasi->where('nama_wilayah', $args['nama_wilayah']);
        }

        return $konsolidasi->get();
    }
}