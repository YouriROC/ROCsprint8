use WorldEvents
select 
count(EventName) AS [Number of Events],
MAX(EventDate) AS [Last Date],
MIN(EventDate)AS [First Date]

FROM tblEvent