from Car import Car
from Account import Account
from uberX import UberX

if __name__ == "__main__":
    print('Hola Mundo')

    car = Car("AMS234", Account("Andres Herrera","AND123"))
    print(vars(car))
    print(vars(car.driver))

    uberX = UberX("JJJ123", Account("Juanito Perez", "UFF234"), "Hyundai", "S201")
    print(vars(uberX))
    print(vars(uberX.driver))