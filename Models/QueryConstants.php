<?php 
class InputQueryKeys
{ 
    const BEGIN_RELEASE_DATE = 'beginReleaseDate';
    const END_RELEASE_DATE = 'endReleaseDate';
    const ORIGIN_COUNTRY = 'origin_country';
}

class OutputQueryKeys
{ 
    const BEGIN_RELEASE_DATE = 'primary_release_date.gte';
    const END_RELEASE_DATE = 'primary_release_date.lte';
    const SORT_BY = 'sort_by';
    const MIN_VOTE_COUNT = 'vote_count.gte';
    const LANGUAGE = "language";
    const ORIGIN_COUNTRY = 'with_origin_country';
    
}

/// The values to queries
class OutputQueryValues
{ 
    const BY_POPULARITY = 'popularity.desc';
    const BY_AVERAGE = 'vote_average.desc';
    const FR_LANG = 'fr-FR';

}

?>