package JAVA;

public class Main {
    public static void main(String[] args) {
        System.out.println("hola mundo");
        
        Car car = new Car("AMQ123",new Account("Andrés Herrera", "AND123"));
        car.printDataCar();

        UberX uberx = new UberX("QWE567", new Account("Andrea Herrera", "GTF890"),"Chevrolet","Sonic");
        uberx.setPassenger(4);
        uberx.printDataCar();
    }
}
