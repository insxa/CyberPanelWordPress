<?php


$date = new DateTime();

//Create a new DateInterval object using P30D.
$interval = new DateInterval('P31D');

//Add the DateInterval object to our DateTime object.
$date->add($interval);

//Print out the result.
//echo $date->format("Y-m-d");

$now = new DateTime();

$interval = $date->getTimestamp() - $now->getTimestamp();
//echo $interval;

$n = DateTime::createFromFormat(DATE_ATOM, '2020-07-12 19:46:52');
$n = DateTime::createFromFormat('Y-m-d H:i:s', '2020-07-12 19:46:52');

//echo $n->getTimestamp();

$data = '{
  "sizes": [
    {
      "slug": "s-1vcpu-1gb",
      "memory": 1024,
      "vcpus": 1,
      "disk": 25,
      "transfer": 1.0,
      "price_monthly": 5.0,
      "price_hourly": 0.00744,
      "regions": [
        "ams2",
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo1",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-3vcpu-1gb",
      "memory": 1024,
      "vcpus": 3,
      "disk": 60,
      "transfer": 3.0,
      "price_monthly": 15.0,
      "price_hourly": 0.02232,
      "regions": [
        "ams2",
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo1",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-1vcpu-2gb",
      "memory": 2048,
      "vcpus": 1,
      "disk": 50,
      "transfer": 2.0,
      "price_monthly": 10.0,
      "price_hourly": 0.01488,
      "regions": [
        "ams2",
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo1",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-2vcpu-2gb",
      "memory": 2048,
      "vcpus": 2,
      "disk": 60,
      "transfer": 3.0,
      "price_monthly": 15.0,
      "price_hourly": 0.02232,
      "regions": [
        "ams2",
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo1",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-1vcpu-3gb",
      "memory": 3072,
      "vcpus": 1,
      "disk": 20,
      "transfer": 3.0,
      "price_monthly": 15.0,
      "price_hourly": 0.02232,
      "regions": [
        "ams2",
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo1",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "c-2",
      "memory": 4096,
      "vcpus": 2,
      "disk": 25,
      "transfer": 5.0,
      "price_monthly": 40.0,
      "price_hourly": 0.06,
      "regions": [
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc3",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-2vcpu-4gb",
      "memory": 4096,
      "vcpus": 2,
      "disk": 80,
      "transfer": 4.0,
      "price_monthly": 20.0,
      "price_hourly": 0.02976,
      "regions": [
        "ams2",
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo1",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-4vcpu-8gb",
      "memory": 8192,
      "vcpus": 4,
      "disk": 160,
      "transfer": 5.0,
      "price_monthly": 40.0,
      "price_hourly": 0.05952,
      "regions": [
        "ams2",
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo1",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "c-4",
      "memory": 8192,
      "vcpus": 4,
      "disk": 50,
      "transfer": 5.0,
      "price_monthly": 80.0,
      "price_hourly": 0.119,
      "regions": [
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc3",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "c-8",
      "memory": 16384,
      "vcpus": 8,
      "disk": 100,
      "transfer": 5.0,
      "price_monthly": 160.0,
      "price_hourly": 0.238,
      "regions": [
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc3",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-6vcpu-16gb",
      "memory": 16384,
      "vcpus": 6,
      "disk": 320,
      "transfer": 6.0,
      "price_monthly": 80.0,
      "price_hourly": 0.11905,
      "regions": [
        "ams2",
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo1",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-8vcpu-32gb",
      "memory": 32768,
      "vcpus": 8,
      "disk": 640,
      "transfer": 7.0,
      "price_monthly": 160.0,
      "price_hourly": 0.2381,
      "regions": [
        "ams2",
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo1",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "c-16",
      "memory": 32768,
      "vcpus": 16,
      "disk": 200,
      "transfer": 5.0,
      "price_monthly": 320.0,
      "price_hourly": 0.476,
      "regions": [
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc3",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-12vcpu-48gb",
      "memory": 49152,
      "vcpus": 12,
      "disk": 960,
      "transfer": 8.0,
      "price_monthly": 240.0,
      "price_hourly": 0.35714,
      "regions": [
        "ams2",
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo1",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-16vcpu-64gb",
      "memory": 65536,
      "vcpus": 16,
      "disk": 1280,
      "transfer": 9.0,
      "price_monthly": 320.0,
      "price_hourly": 0.47619,
      "regions": [
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "c-32",
      "memory": 65536,
      "vcpus": 32,
      "disk": 400,
      "transfer": 5.0,
      "price_monthly": 640.0,
      "price_hourly": 0.952,
      "regions": [
        "fra1"
      ],
      "available": true
    },
    {
      "slug": "c-48",
      "memory": 73728,
      "vcpus": 48,
      "disk": 20,
      "transfer": 5.0,
      "price_monthly": 960.0,
      "price_hourly": 1.429,
      "regions": [

      ],
      "available": true
    },
    {
      "slug": "s-20vcpu-96gb",
      "memory": 98304,
      "vcpus": 20,
      "disk": 1920,
      "transfer": 10.0,
      "price_monthly": 480.0,
      "price_hourly": 0.71429,
      "regions": [
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-24vcpu-128gb",
      "memory": 131072,
      "vcpus": 24,
      "disk": 2560,
      "transfer": 11.0,
      "price_monthly": 640.0,
      "price_hourly": 0.95238,
      "regions": [
        "ams3",
        "blr1",
        "fra1",
        "lon1",
        "nyc1",
        "nyc2",
        "nyc3",
        "sfo2",
        "sgp1",
        "tor1"
      ],
      "available": true
    },
    {
      "slug": "s-32vcpu-192gb",
      "memory": 196608,
      "vcpus": 24,
      "disk": 3840,
      "transfer": 12.0,
      "price_monthly": 960.0,
      "price_hourly": 1.42857,
      "regions": [

      ],
      "available": true
    }
  ],
  "links": {
  },
  "meta": {
    "total": 20
  }
}';

$json = json_decode($data);

foreach ($json->sizes as $size){
    echo $size->slug;
    echo $size->price_monthly;

}


