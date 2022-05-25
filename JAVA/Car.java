package JAVA;

class Car {
    private Integer id;
    private String license;
    private Account driver;
    //private Integer passenger; //! no es visible para otras clases
    protected Integer passenger; //! no es visible para otras clases pero si para sus subclases y paquetes

    // parámetros obligatorios para crear un objeto car
    public Car(String license,Account driver){
        this.license = license;
        this.driver = driver;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getLicense() {
        return license;
    }

    public void setLicense(String license) {
        this.license = license;
    }

    public Account getDriver() {
        return driver;
    }

    public void setDriver(Account driver) {
        this.driver = driver;
    }

    public Integer getPassenger(){
        return passenger;
    }

    public void setPassenger(Integer passenger){
        if(passenger == 4){
            this.passenger = passenger;
        }else{
            System.out.println("Necesitas asignar cuatro pasajeros");
        }
    }


    // métodos
    void printDataCar(){
        System.out.println("Lincense: " + license +
        "\nName Driver: " + driver.name +
        "\nPassenger: " + this.passenger);
    }
}