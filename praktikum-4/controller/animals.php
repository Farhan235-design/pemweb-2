<?php
class animal {
    public $animals = ["Kucing", "Harimau", "kelinci", "Buaya", "Ular"];
    function index(){
        echo "<ol>";
        foreach ($this->animals as $key => $value) {
            echo "<li>$value</li>";
        }
        echo "</ol>";
    }
    function store ($hewan){
        array_push($this->animals, $hewan);

        $this->index();
    }
    public function update($key, $value){
        if(isset($this->animals[$key])){
            $this->animals[$key] = $value;
            
            //memanggil method index
            $this->index();
        } else {
            echo "hewan tidak ditemukan";
        }
    
    }
    public function destroy($key){
        if(isset($this->animals[$key])){
            unset($this->animals[$key]);
            $this->index();
        } else {
            echo "hewan tidak ditemukan";
        }
    }
}

$hewan = new animal();
echo "index - menampilkan seluruh data Hewan <br>";
$hewan->index();
echo "<br>";

echo "store - menambahkan data Hewan baru (burung) <br>";
$hewan->store("Burung");
echo "<br>";

echo "update - mengubah data hewan <br>";
$hewan->update(6, "kucing anggora");
echo "<br>";

echo "destroy - menghapus data hewan <br>";
$hewan->destroy(0);
echo "<br>";
?>