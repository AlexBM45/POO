from Car import Car

class UberPool(Car):
    brand = str
    model = str

    def __init__(self, license, driver, brand, model):
        super().__init__(self, license, driver)
        self.brand = brand
        self.model = model