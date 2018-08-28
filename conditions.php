<?php
$weight=70;
$height=1.65;

$bmi=$weight/($height*$height);

echo " BMI IS $bmi";

if ($bmi<15)
{
echo "Very severely underweight";
}
elseif ($bmi>=15 and $bmi<16)
{
    echo "severely underweight";
}
elseif ($bmi>=16 and $bmi<18.5)
{
    echo "under weight";
}
elseif ($bmi>=18.5 and $bmi<25)
{
    echo "normal weight";
}
elseif ($bmi>=25 and $bmi<30)
{
    echo "overweight";
}
elseif ($bmi>=30 and $bmi<35)
{
    echo "moderately obesse";
}
elseif ($bmi>=35 and $bmi<40)
{
    echo "severely obesse";
}
elseif ($bmi>=40 and $bmi<45)
{
    echo "very severely obesse";
}
elseif ($bmi>=45 and $bmi<50)
{
    echo "mordibly obesse";
}
elseif ($bmi>=50 and $bmi<60)
{
    echo "super obesse";
}
elseif ($bmi>60)
{
    echo "super obesse";
}