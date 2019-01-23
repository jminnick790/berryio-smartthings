<? $door_sensors = exec('ps agx | grep [s]ensors.py -c');?>
<? $motion_sensors = exec('ps agx | grep [s]ensors.py -c');?>

{
  "1M_load":"<?=$load_average[0]?>",
  "5M_load":"<?=$load_average[1]?>",
  "15M_load":"<?=$load_average[2]?>",
  "cpu_temp":"<?=$temperature?>",
  "cpu_speed":"<?=$speed?>",
  "cpu_volt":"<?=$voltage?>",
  "cpu_perc":"<?=$cpu_perc?>",
  "disk_usage":"<?=$disk_perc?>",
  "mem_avail":"<?=$mem_avail?>",
  "gpio_value_2":"<?=$gpio_values[2]?>",
  "gpio_value_3":"<?=$gpio_values[3]?>",
  "gpio_value_4":"<?=$gpio_values[4]?>",
  "gpio_value_7":"<?=$gpio_values[7]?>",
  "gpio_value_17":"<?=$gpio_values[17]?>",
  "door_sensors":"<?=$door_sensors?>",
  "motion_sensors":"<?=$motion_sensors?>"
}
