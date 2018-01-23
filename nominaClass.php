<?php

Class Nomina{
    private $idNomina;
    private $anioNomina;
    private $mesNomina;
    private $diasLaborados;
    private $diaDiurno;
    private $diaNocturno;
    private $diaDomDiurno;
    private $diaDomNocturno;
    private $diaDominical;
    private $noDocumento;
    private $esPrima;
    private $valorPrima;
    private $cuentaAhorros;
    private $diasVacaciones;
    private $salarioCargo;
    private $basico;
    private $auxTransporte;
    private $TotalDevengado;
    private $valSalud;
    private $valPension;
    private $Totaldeducido;
    private $netoPagado;
    private $totalDeducido;
    private $TotalDevengado;

/*    
    """""""""""""""""""""""""""""""" VALIDAR """"""""""""""""""""""""""""""""""""""""""
    Variables que no sean necesarias definir sino solo imprimir su valor.
    parametros iniciales para el constructor que esta comentado, que valores deben estar plenamente definidos al momento de instanciar un objeto Nomina.
    """""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""

    function __construct($idNomina, $anioNomina, $mesNomina, $diasLaborados, $diaDiurno, $diaNocturno, $diaDomDiurno, $diaDomNocturno, $diaDominical, $noDocumento, $esPrima, $valorPrima, $cuentaAhorros, $diasVacaciones,$salarioCargo;) {
        $this->idNomina = $idNomina;
        $this->anioNomina = $anioNomina;
        $this->mesNomina = $mesNomina;
        $this->diasLaborados = $diasLaborados;
        $this->diaDiurno = $diaDiurno;
        $this->diaNocturno = $diaNocturno;
        $this->diaDomDiurno = $diaDomDiurno;
        $this->diaDomNocturno = $diaDomNocturno;
        $this->diaDominical = $diaDominical;
        $this->noDocumento = $noDocumento;
        $this->esPrima = $esPrima;
        $this->valorPrima = $valorPrima;
        $this->cuentaAhorros = $cuentaAhorros;
        $this->diasVacaciones = $diasVacaciones;
        $this->salarioCargo = $salarioCargo;
    }
*/    
    public function calcularBasico($diasLaborados,$salarioCargo){
        $this->basico = ($salarioCargo/30)*$diasLaborados;
    }

    public function obtieneAuxTransporte($salarioCargo,$diasLaborados){
        $valMinimo = 775;
        $valAuxTransporte = 80000;

        if ($salarioCargo>($valMinimo*2) ) { //generar archivo global con esta variable $valMinimo
            $this->auxTransporte = 0;
        }else{
            $this->auxTransporte = ($valAuxTransporte/30)*$diasLaborados; //generar archivo global con esta variable $valAuxTransporte
        }
    }

    public function calValPension(){
    $pPension = 4; //generar archivo global con esta variable $pPension
    $this->valPension = ($this->basico * $pPension)/100;
    }

    public function calValSalud(){
        $pSalud = 4; //generar archivo global con esta variable $pSalud
        $this->valSalud = ($this->basico * $pSalud)/100;
    }

    public function settotalDeducido(){
        $this->totalDeducido = ($this->valPension  + $this->valSalud);
    }

    public function setTotalDevengado(){
        $this->TotalDevengado = ($this->TotalDevengado - $this->totalDeducido);
    }

    public function setTotalDevengado(){
        $this->TotalDevengado = $this->basico + $this->auxTransporte;
        return $this->TotalDevengado;
    }

    function getBasico(){
        return $this->basico;
    }

     function getAuxTransporte(){
        return $this->auxTransporte;
    }

    function getIdNomina() {
        return $this->idNomina;
    }

    function getAnioNomina() {
        return $this->anioNomina;
    }

    function getMesNomina() {
        return $this->mesNomina;
    }

    function getDiasLaborados() {
        return $this->diasLaborados;
    }

    function getDiaDiurno() {
        return $this->diaDiurno;
    }

    function getDiaNocturno() {
        return $this->diaNocturno;
    }

    function getDiaDomDiurno() {
        return $this->diaDomDiurno;
    }

    function getDiaDomNocturno() {
        return $this->diaDomNocturno;
    }

    function getDiaDominical() {
        return $this->diaDominical;
    }

    function getNoDocumento() {
        return $this->noDocumento;
    }

    function getEsPrima() {
        return $this->esPrima;
    }

    function getValorPrima() {
        return $this->valorPrima;
    }

    function getCuentaAhorros() {
        return $this->cuentaAhorros;
    }

    function getDiasVacaciones() {
        return $this->diasVacaciones;
    }

    function setIdNomina($idNomina) {
        $this->idNomina = $idNomina;
    }

    function setAnioNomina($anioNomina) {
        $this->anioNomina = $anioNomina;
    }

    function setMesNomina($mesNomina) {
        $this->mesNomina = $mesNomina;
    }

    function setDiasLaborados($diasLaborados) {
        $this->diasLaborados = $diasLaborados;
    }

    function setDiaDiurno($diaDiurno) {
        $this->diaDiurno = $diaDiurno;
    }

    function setDiaNocturno($diaNocturno) {
        $this->diaNocturno = $diaNocturno;
    }

    function setDiaDomDiurno($diaDomDiurno) {
        $this->diaDomDiurno = $diaDomDiurno;
    }

    function setDiaDomNocturno($diaDomNocturno) {
        $this->diaDomNocturno = $diaDomNocturno;
    }

    function setDiaDominical($diaDominical) {
        $this->diaDominical = $diaDominical;
    }

    function setNoDocumento($noDocumento) {
        $this->noDocumento = $noDocumento;
    }

    function setEsPrima($esPrima) {
        $this->esPrima = $esPrima;
    }

    function setValorPrima($valorPrima) {
        $this->valorPrima = $valorPrima;
    }

    function setCuentaAhorros($cuentaAhorros) {
        $this->cuentaAhorros = $cuentaAhorros;
    }

    function setDiasVacaciones($diasVacaciones) {
        $this->diasVacaciones = $diasVacaciones;
    }
  
}

$nomina = new Nomina();

$nomina->calcularBasico(10,100);
$nomina->obtieneAuxTransporte(10,100);

echo $nomina->getBasico();
echo "<br/>".$nomina->getAuxTransporte();
echo "<br/>".$nomina->setTotalDevengado();


?>