<?php
$ch = curl_init();
$url = 'http://api.data.go.kr/openapi/tn_pubr_prkplce_info_api'; /*URL*/
$queryParams = '?' . urlencode('FVBdb0CmDdjtsvpcNZ8Hz2C00lHEap6KN6qagmpPCaLzQrUis%2FpntNApXFwdOXO9ZWKpZwb9E1%2FIHK3ebboH%2FA%3D%3D') . '; /*Service Key*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('100'); /**/
$queryParams .= '&' . urlencode('type') . '=' . urlencode('xml'); /**/
$queryParams .= '&' . urlencode('prkplceNo') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('prkplceNm') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('prkplceSe') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('prkplceType') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('rdnmadr') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('lnmadr') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('prkcmprt') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('feedingSe') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('enforceSe') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('operDay') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('weekdayOperOpenHhmm') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('weekdayOperColseHhmm') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('satOperOperOpenHhmm') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('satOperCloseHhmm') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('holidayOperOpenHhmm') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('holidayCloseOpenHhmm') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('parkingchrgeInfo') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('basicTime') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('basicCharge') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('addUnitTime') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('addUnitCharge') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('dayCmmtktAdjTime') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('dayCmmtkt') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('monthCmmtkt') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('metpay') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('spcmnt') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('institutionNm') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('phoneNumber') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('latitude') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('longitude') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('pwdbsPpkZoneYn') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('referenceDate') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('instt_code') . '=' . urlencode(''); /**/
$queryParams .= '&' . urlencode('instt_nm') . '=' . urlencode(''); /**/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

echo $response;

?> 