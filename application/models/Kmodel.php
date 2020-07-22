<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kmodel extends CI_Model {

   
   public function __construct()
   {
       parent::__construct();
       $this->load->helper('url');
       //Do your magic here
   }

   public function getKontraktor()
   {
        $this->db->select('*');
        $this->db->from('kontraktor');
        $query = $this->db->get();

        return $query->result();
   }

   public function getSijilSah()
   {
      $this->db->select('*');
      $this->db->from('sijilsah');
      $query = $this->db->get();

      return $query->result();
   }

   public function getKontraktorId($id)
   {

        $this->db->select('*');
        $this->db->from('kontraktor');
        $this->db->where('kontraktorId', $id);
        $query = $this->db->get();

        return $query->result();
   }

   public function ktotal()
   {
   
     $this->load->helper('url');

     $this->db->select('*');
     $this->db->from('kontraktor');

     $c = $this->db->get()->num_rows();
     return $c;
   }

   public function kdaftartotal()
   {

   }
   public function kxdaftartotal()
   {

   }

   ///Add kontraktor

   public function kaddProcess($data="")
   {
      $context = array(
         
          'konName' => $this->input->post('konnama'),
          'KonAlamat' => $this->input->post('alamat'),
          'konImage' => $data,
          'konAlamatExtS' => $this->input->post('alamatjalan'),
          'konAlamatExtD' => $this->input->post('alamatdaerah'),
          'konPoskod'=> $this->input->post('poskod'),
          'konBandar' => $this->input->post('bandar'),
          'konDaerah' => $this->input->post('dearah'),
          'konNegeri' => $this->input->post('negeri'),
          'konTel' => $this->input->post('telefonpejabat'),

          'konPengurus'=> $this->input->post('namapengurus'),
          'NoKPpengurus'=> $this->input->post('nokp'),
          'NoTelPengurus'=> $this->input->post('telpengurus'),

          'konEmail'=> $this->input->post('email'),
          'koFax'=> $this->input->post('fax'),
          //rakan konsin
          'RKsatu'=> $this->input->post('rakansatu'),
          'RKsatuNokp'=> $this->input->post('rakankadsatu'),
          'RKsatuNotel'=> $this->input->post('rakantelsatu'),

          'RKdua'=> $this->input->post('rakandua'),
          'RKduaNokp'=> $this->input->post('rakankaddua'),
          'RKduaNotel'=> $this->input->post('rakanteldua'),

          'RKtiga'=> $this->input->post('rakantiga'),
          'RKtigaNokp'=> $this->input->post('rakankadtiga'),
          'RKtigaNotel'=> $this->input->post('rakanteltiga'),

          'RKempat'=> $this->input->post('rakanempat'),
          'RKempatNokp'=> $this->input->post('rakankadempat'),
          'RKempatNotel'=> $this->input->post('rakantelempat'),
          //maklumat bank
          'konBank'=> $this->input->post('namabank'),
          'konAkaunBank'=> $this->input->post('noakaun'),
          //kawasan operasi syarikat
          'konKawOperasi'=> $this->input->post('kawoperasi'),
          'konPrestasi'=> $this->input->post('prestasi'),

          //jenis permohonan

          'spPBaharu'=> $this->input->post('pbaru'),
          'spPembaharuan'=> $this->input->post('pembaharuan'),
          'spLainLain'=> $this->input->post('etc'),
          'spKategori'=> $this->input->post('kategori'),
          //maklumat permohonan
          'spDateMohon'=> $this->input->post('tmohon'),
          'spCaj'=> $this->input->post('casp'),
          'spNoResit'=> $this->input->post('noreset'),
          'spNoSijil'=> $this->input->post('nosijilp'),

          'spDateKeluar'=> $this->input->post('tsijilkeluar'),
          'spDateTamat'=> $this->input->post('tsijiltamat'),

          //disemak oleh

          'spDisemak'=> $this->input->post('semakoleh'),
          'spJwtnPenyemak'=> $this->input->post('jsemak'),

          'spDisah'=> $this->input->post('saholeh'),
          'spJwtnSah'=> $this->input->post('jurus'),

          'spLulus'=> $this->input->post('lulusoleh'),
          'spJwtnLulus'=> $this->input->post('julus'),

          //LPIMM
          //PKK

          'sijilNoPendaftaran'=>$this->input->post('lnodaftar'),
          'sijilSah'=>$this->input->post('tlpkksah'),
          'sijilTamat'=>$this->input->post('tlpkktamat'),

          'sijilPPKGredOne'=>$this->input->post('lpkkgredsatu'),
          'sijilPPKCatOne'=>$this->input->post('lpkkcatsatu'),
          'sijilPPKKhuOne'=>$this->input->post('lpkkkhusussatu'),

          'sijilPPKGredTwo'=>$this->input->post('lpkkgreddua'),
          'sijilPPKCatTwo'=>$this->input->post('lpkkcatdua'),
          'sijilPPKKhuTwo'=>$this->input->post('lpkkkhususdua'),

          'sijilPPKGredThree'=>$this->input->post('lpkkgredtiga'),
          'sijilPPKCatThree'=>$this->input->post('lpkkcattiga'),
          'sijilPPKKhuThree'=>$this->input->post('lpkkkhusustiga'),

          //SPKK

          'sijilSPKKNo'=>$this->input->post('lspkkdaftar'),
          'sijilSPKKsah'=>$this->input->post('tlspkksah'),
          'sijilSPKKTamat'=>$this->input->post('tlspkktamat'),

          'sijilSPPKGredOne'=>$this->input->post('lspkkgredsatu'),
          'sijilSPPKCatOne'=>$this->input->post('lspkkcatsatu'),
          'sijilSPPKKhuOne'=>$this->input->post('lspkkkhusussatu'),

          'sijilSPPKGredTwo'=>$this->input->post('lspkkgreddua'),
          'sijilSPPKCatTwo'=>$this->input->post('lspkkcatdua'),
          'sijilSPPKKhuTwo'=>$this->input->post('lspkkkhususdua'),

          'sijilSPPKGredThree'=>$this->input->post('lspkkgredtiga'),
          'sijilSPPKCatThree'=>$this->input->post('lspkkcattiga'),
          'sijilSPPKKhuThree'=>$this->input->post('lspkkkhusustiga'),

          //BTSP

          'sijiSTBNo'=>$this->input->post('stbnosijil'),
          'sijilSTBSah'=>$this->input->post('stbsah'),
          'sijilSTBTamat'=>$this->input->post('stbtamat'),
          'sijilSTBGred'=>$this->input->post('stbgred'),

          //SSM

          'daftarSSM'=>$this->input->post('sijilssm'),
          'daftarHSSM'=>$this->input->post('ssmsah'),
          'daftarTSSM'=>$this->input->post('ssmtamat'),

          //sst

          'daftarGST'=>$this->input->post('sijilsst'),
          'dateDGST'=>$this->input->post('sstsah'),
          'dateTGST'=>$this->input->post('ssttamat'),

          //JPS

          'sijilJPSNo'=>$this->input->post('jpsno'),
          'sijilJPSSah'=>$this->input->post('jpssah'),
          'sijilJPSTamat'=>$this->input->post('jpstamat'),
          'sijilJPSKate'=>$this->input->post('jpsgred')

        
      );

      return $this->db->insert('kontraktor', $context);
   }
        
   public function kupdateProcess($data="", $context, $id)
   {
      $context = array(
         'konName' => $this->input->post('konnama'),
         'KonAlamat' => $this->input->post('alamat'),
         'konImage' => $data,
         'konAlamatExtS' => $this->input->post('alamatjalan'),
         'konAlamatExtD' => $this->input->post('alamatdaerah'),
         'konPoskod'=> $this->input->post('poskod'),
         'konBandar' => $this->input->post('bandar'),
         'konDaerah' => $this->input->post('dearah'),
         'konNegeri' => $this->input->post('negeri'),
         'konTel' => $this->input->post('telefonpejabat'),

         'konPengurus'=> $this->input->post('namapengurus'),
         'NoKPpengurus'=> $this->input->post('nokp'),
         'NoTelPengurus'=> $this->input->post('telpengurus'),

         'konEmail'=> $this->input->post('email'),
         'koFax'=> $this->input->post('fax'),
         //rakan konsin
         'RKsatu'=> $this->input->post('rakansatu'),
         'RKsatuNokp'=> $this->input->post('rakankadsatu'),
         'RKsatuNotel'=> $this->input->post('rakantelsatu'),

         'RKdua'=> $this->input->post('rakandua'),
         'RKduaNokp'=> $this->input->post('rakankaddua'),
         'RKduaNotel'=> $this->input->post('rakanteldua'),

         'RKtiga'=> $this->input->post('rakantiga'),
         'RKtigaNokp'=> $this->input->post('rakankadtiga'),
         'RKtigaNotel'=> $this->input->post('rakanteltiga'),

         'RKempat'=> $this->input->post('rakanempat'),
         'RKempatNokp'=> $this->input->post('rakankadempat'),
         'RKempatNotel'=> $this->input->post('rakantelempat'),
         //maklumat bank
         'konBank'=> $this->input->post('namabank'),
         'konAkaunBank'=> $this->input->post('noakaun'),
         //kawasan operasi syarikat
         'konKawOperasi'=> $this->input->post('kawoperasi'),
         'konPrestasi'=> $this->input->post('prestasi'),

         //jenis permohonan

         'spPBaharu'=> $this->input->post('pbaru'),
         'spPembaharuan'=> $this->input->post('pembaharuan'),
         'spLainLain'=> $this->input->post('etc'),
         'spKategori'=> $this->input->post('kategori'),
         //maklumat permohonan
         'spDateMohon'=> $this->input->post('tmohon'),
         'spCaj'=> $this->input->post('casp'),
         'spNoResit'=> $this->input->post('noreset'),
         'spNoSijil'=> $this->input->post('nosijilp'),

         'spDateKeluar'=> $this->input->post('tsijilkeluar'),
         'spDateTamat'=> $this->input->post('tsijiltamat'),

         //disemak oleh

         'spDisemak'=> $this->input->post('semakoleh'),
         'spJwtnPenyemak'=> $this->input->post('jsemak'),

         'spDisah'=> $this->input->post('saholeh'),
         'spJwtnSah'=> $this->input->post('jurus'),

         'spLulus'=> $this->input->post('lulusoleh'),
         'spJwtnLulus'=> $this->input->post('julus'),

         //LPIMM
         //PKK

         'sijilNoPendaftaran'=>$this->input->post('lnodaftar'),
         'sijilSah'=>$this->input->post('tlpkksah'),
         'sijilTamat'=>$this->input->post('tlpkktamat'),

         'sijilPPKGredOne'=>$this->input->post('lpkkgredsatu'),
         'sijilPPKCatOne'=>$this->input->post('lpkkcatsatu'),
         'sijilPPKKhuOne'=>$this->input->post('lpkkkhusussatu'),

         'sijilPPKGredTwo'=>$this->input->post('lpkkgreddua'),
         'sijilPPKCatTwo'=>$this->input->post('lpkkcatdua'),
         'sijilPPKKhuTwo'=>$this->input->post('lpkkkhususdua'),

         'sijilPPKGredThree'=>$this->input->post('lpkkgredtiga'),
         'sijilPPKCatThree'=>$this->input->post('lpkkcattiga'),
         'sijilPPKKhuThree'=>$this->input->post('lpkkkhusustiga'),

         //SPKK

         'sijilSPKKNo'=>$this->input->post('lspkkdaftar'),
         'sijilSPKKsah'=>$this->input->post('tlspkksah'),
         'sijilSPKKTamat'=>$this->input->post('tlspkktamat'),

         'sijilSPPKGredOne'=>$this->input->post('lspkkgredsatu'),
         'sijilSPPKCatOne'=>$this->input->post('lspkkcatsatu'),
         'sijilSPPKKhuOne'=>$this->input->post('lspkkkhusussatu'),

         'sijilSPPKGredTwo'=>$this->input->post('lspkkgreddua'),
         'sijilSPPKCatTwo'=>$this->input->post('lspkkcatdua'),
         'sijilSPPKKhuTwo'=>$this->input->post('lspkkkhususdua'),

         'sijilSPPKGredThree'=>$this->input->post('lspkkgredtiga'),
         'sijilSPPKCatThree'=>$this->input->post('lspkkcattiga'),
         'sijilSPPKKhuThree'=>$this->input->post('lspkkkhusustiga'),

         //BTSP

         'sijiSTBNo'=>$this->input->post('stbnosijil'),
         'sijilSTBSah'=>$this->input->post('stbsah'),
         'sijilSTBTamat'=>$this->input->post('stbtamat'),
         'sijilSTBGred'=>$this->input->post('stbgred'),

         //SSM

         'daftarSSM'=>$this->input->post('sijilssm'),
         'daftarHSSM'=>$this->input->post('ssmsah'),
         'daftarTSSM'=>$this->input->post('ssmtamat'),

         //sst

         'daftarGST'=>$this->input->post('sijilsst'),
         'dateDGST'=>$this->input->post('sstsah'),
         'dateTGST'=>$this->input->post('ssttamat'),

         //JPS

         'sijilJPSNo'=>$this->input->post('jpsno'),
         'sijilJPSSah'=>$this->input->post('jpssah'),
         'sijilJPSTamat'=>$this->input->post('jpstamat'),
         'sijilJPSKate'=>$this->input->post('jpsgred'),
         'kontraktorId' => $this->input->post('hiddenid')

       
     );

     $this->db->where('kontraktorId', $id);

     $this->db->update('kontraktor', $context);


   }

   public function searchKontraktor($daerah)
   {
      $this->db->select('*');
      $this->db->from('kontraktor');
      $this->db->where('konDaerah',$daerah);
      $this->db->order_by('kontraktorId', 'ASC');
      $query = $this->db->get();

      return $query->result();
   }

   public function searchKontraktorprint($daerah)
   {
      $this->db->select('*');
      $this->db->from('kontraktor');
      $this->db->where('konDaerah',$daerah);
      $this->db->order_by('kontraktorId', 'ASC');
      $query = $this->db->get();

      return $query->result();
   }

   public function kdeleteProcess()
   {
        
   }


    

}

/* End of file Kmodel.php */
