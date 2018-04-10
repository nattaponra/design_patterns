<?php
interface DisplayElement {
       public function display();
}
interface Observer {
       public function update($temp, $humidity,$pressure);
}
interface Subject {
       public function registerObserver(Observer $o);
       public function removeObserver(Observer $o);
       public function notifyObservers();
}
   
class WeatherData implements Subject {
       private $observers;
       private $temperature;
       private $humidity;
       private $pressure;

       public function WeatherData() {
              $this->observers = [];
       }

       public function registerObserver(Observer $o) {
              $this->observers[] = $o;
       }

       public function removeObserver(Observer $o) {
             $i = array_search($o,$this->observers);
             if ($i >= 0) {
               unset($this->observers[$i]);
             }
       }

       public function notifyObservers() {
              foreach ($this->observers as $observer) {
                     $observer->update($this->temperature, $this->humidity, $this->pressure);
              }
       }

       public function measurementsChanged() {
              $this->notifyObservers();
       }

       public function setMeasurements($temperature,$humidity,$pressure) {
              $this->temperature = $temperature;
              $this->humidity    = $humidity;
              $this->pressure    = $pressure;
              $this->measurementsChanged();
       }

 // other WeatherData methods here
}
class CurrentConditionsDisplay implements Observer, DisplayElement {
       private $temperature;
       private $humidity;
       private $weatherData;
      
       public function CurrentConditionsDisplay(Subject $weatherData) {
              $this->weatherData = $weatherData;
              $this->weatherData->registerObserver($this);
       }
      
       public function update($temperature, $humidity, $pressure) {
              $this->temperature = $temperature;
              $this->humidity    = $humidity;
              $this->display();
       }
      
       public function display() {
              print_r("Current conditions:".$this->temperature
            ." F degrees and " .$this->humidity."% humidity\n");
       }
}

class StatisticsDisplay implements Observer, DisplayElement{
       private $temperature;
       private $humidity;
       private $weatherData;
       public function StatisticsDisplay(Subject $weatherData) {
              $this->weatherData = $weatherData;
              $this->weatherData->registerObserver($this);
       }
       public function update($temperature, $humidity, $pressure) {
              $this->temperature = $temperature;
              $this->humidity    = $humidity;
              $this->display();
       }
      
       public function display() {
              print_r("Statistics Display:".$this->temperature
            ." F degrees and " .$this->humidity."% humidity\n");
       }
}

$weatherData = new WeatherData();
$currentDisplay    = new CurrentConditionsDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
//$forecastDisplay = new ForecastDisplay($weatherData);


$weatherData->setMeasurements(80, 65, 30.4);
$weatherData->setMeasurements(82, 70, 29.2);
$weatherData->setMeasurements(78, 90, 29.2);