# web_ci_sederhana
# Persiapan
a. xampp
b. visual studio code
c. web browser
#  Cara Membuat Web dengan CI
1. Download CI 3
2. Ekstrak file CI 3 ke dalam localhost dan rename
4. Buat Project
5. Setting config sesuai dengan nama folder, seperti:
   ```
   $config['base_url'] = 'http://localhost/latihan2/';
   ```
6. Setting autoload dan input libraries dengan yang dibutuhkan
   ```
   $autoload['libraries'] = array('database', 'session');
   ```
7. setting autoload helper url
   ```
   $autoload['helper'] = array('url');
   ```
8. setting database dengan menggunakan username, password, dan nama database yang akan dipakai
   ```
   $db['default'] = array(
	 'dsn'	=> '',
	 'hostname' => 'localhost',
	 'username' => 'root',
	 'password' => '',
	 'database' => 'malasngoding',
	 'dbdriver' => 'mysqli',
	 'dbprefix' => '',
	 'pconnect' => FALSE,
	 'db_debug' => (ENVIRONMENT !== 'production'),
	 'cache_on' => FALSE,
	 'cachedir' => '',
	 'char_set' => 'utf8',
	 'dbcollat' => 'utf8_general_ci',
	 'swap_pre' => '',
	 'encrypt' => FALSE,
	 'compress' => FALSE,
	 'stricton' => FALSE,
	 'failover' => array(),
	 'save_queries' => TRUE
   );
   
   ```
9. Buat controller dan function untuk menghubungkan model dan view nantinya, seperti contoh:
   ```
   <?php 
 
   class Crud extends CI_Controller{
 
   // memanggil atau membuka model m_data
	  function __construct(){
		 parent::__construct();		
    $this->load->model('m_data');
    
    //function untuk memanggil helper url melalui controller
                $this->load->helper('url');
	  }
 
   //membuat function index untuk menampilkan data melalui tampil_data yang dibuat dalam m_data 
	  function index(){
    $data['user'] = $this->m_data->tampil_data()->result();
    // memparsing ke dalam v_tampil  
	  	$this->load->view('v_tampil',$data);
    }
    }
   ```
10. Selanjutnya buat model untuk menghubungkan dengan database
   ```
   <?php 
 
  class M_data extends CI_Model{
	  function tampil_data(){
   // mengambil data dari database dengan menginputkan nama tabel dan mengembalikan ke pemanggil fungsi dengan return  
		 return $this->db->get('user');
    }
    function input_data($data,$table){
		   $this->db->insert($table,$data);
    }
    }
   ```
11. Buat view untuk tampilannya
   ```
  <!DOCTYPE html>
  <html>
  <head>
	 <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>   </head>
   <body>
	  <center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	  <!-- membuat hyperlink dan menampilkan function tambah -->
	  <center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	  <!-- tabel untuk menampilkan data -->
	  <table style="margin:20px auto;" border="1">
		 <tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		  </tr>
		  <?php 
    ```
		$no = 1;
		foreach($user as $u){ 
		?>
  
