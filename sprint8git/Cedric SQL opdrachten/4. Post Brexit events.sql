USE WorldEvents
SELECT 
tblContinent.ContinentName AS [Continent], 
tblCountry.CountryName AS [Country],
COUNT(EventName) AS [Number of events]

FROM     tblContinent 
INNER JOIN
tblCountry ON tblContinent.ContinentID = tblCountry.ContinentID 
INNER JOIN
tblEvent ON tblCountry.CountryID = tblEvent.CountryID 

GROUP BY CountryName, ContinentName

ORDER BY Country ASC