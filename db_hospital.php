<?php
mysqli_report(MYSQLI_REPORT_OFF); #mysql ni error nai batave addmovie ma not inserted print karva mate 

class Database
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "hospital_db");

        if ($this->conn->connect_error) {
            die("Connection Failed !! ");
        }
    }

    public function login($u, $p)
    {
        $sqlsel = "select * from admin where username='$u' and password='$p'";
        $result = $this->conn->query($sqlsel);
        // $result = mysqli_query($this->conn, $sqlsel);
        return $result;
    }

    public function addpatient($n, $a, $g, $m)
    {
        $sqlsel = "insert into patients values('','$n', $a, '$g', '$m')";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function viewpatient()
    {
        $sqlsel = "select * from patients";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function adddoctor($n, $s, $m, $f)
    {
        $sqlsel = "insert into doctors values('','$n', '$s', '$m', $f)";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function viewdoctor()
    {
        $sqlsel = "select * from doctors";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function addappointment($pid, $did, $d)
    {
        $sqlsel = "insert into appointments values('',$pid, $did, '$d')";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function viewappointment()
    {
        $sqlsel = "SELECT a.*, p.p_name, d.d_name
               FROM appointments a
               INNER JOIN patients p
               ON a.patient_id = p.patient_id
               INNER JOIN doctors d
               ON a.doctor_id = d.doctor_id";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function deleteappointment($aid)
    {
        $sqlsel = "delete from appointments where appointment_id = $aid";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function addbill($pid, $c, $m, $t, $s, $d)
    {
        $sqlsel = "insert into billing(patient_id, consultation_fee, medicine_charge, total_amount, payment_status, bill_date) values( $pid, $c, $m, $t, '$s', '$d')";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function viewbill()
    {
        $sqlsel = "SELECT b.*, p.p_name FROM billing b join patients p on b.patient_id = p.patient_id";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function deletebill($bid)
    {
        $sqlsel = "delete from billing where bill_id = $bid";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function fetchpatient($pid)
    {
        $sqlsel = "select * from patients where patient_id = $pid";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function updatepatient($pid, $n, $a, $g, $p)
    {
        $sqlsel = "update patients set p_name = '$n', p_age = $a, gender = '$g', mobile = $p where patient_id = $pid";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function fetchdoctor($did)
    {
        $sqlsel = "select * from doctors where doctor_id = $did";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function updatedoctor($did, $n, $s, $m, $f)
    {
        $sqlsel = "update doctors set d_name = '$n', specialization = '$s', mobile = $m, fees = $f where doctor_id = $did";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function fetchappointment($aid)
    {
        $sqlsel = "select * from appointments where appointment_id = $aid";
        $result = $this->conn->query($sqlsel);
        return $result;
    }


    public function updateappointment($aid, $pid, $did, $d)
    {
        $sqlsel = "update appointments  set patient_id = $pid,  doctor_id = $did,  appointment_date = '$d'  where appointment_id = $aid";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function searchdoctor($dn)
    {
        $sqlsel = "select * from doctors where d_name = '$dn'";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function searchpatient($pn)
    {
        $sqlsel = "select * from patients where p_name = '$pn'";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

    public function searchbill($s)
    {
        $sqlsel = "SELECT b.*, p.p_name FROM billing b join patients p on b.patient_id = p.patient_id where payment_status = '$s'";
        $result = $this->conn->query($sqlsel);
        return $result;
    }

}
