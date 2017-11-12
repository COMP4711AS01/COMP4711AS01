<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data,
 * so that we don't have to worry about any database setup.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Flights_Model extends CSV_Model
{
    private $airports;
    public function __construct()
    {
        parent::__construct(APPPATH . '../data/flights.csv', 'id');
        $this->airports = $this->wacky->airports();
    }
    
    public function destinationIds()
    {
        $destinationIds = array();
        foreach($this->airports as $airport)
        {
            array_push($destinationIds, $airport['id']);
        }
        return $destinationIds;
    }
    
    public function airportNames()
    {
        $destinationAirports = array();
        foreach($this->airports as $airport)
        {
            array_push($destinationAirports, $airport['airport']);
        }
        return $destinationAirports;
    }
}
