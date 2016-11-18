function formatTimeBetween(difference)
{
    var str = ''

    if (difference[0] > 0)
    {
        str += difference[0] + ' year';
        str += difference[0] == 1 ? '' : 's';
        if (difference[1] > 0)
        {
            str += difference[2] > 0 ? ', ' : ' and ';
        }
        else
        {
            str += difference[2] > 0 ? ' and ' : '';
        }
   }

   if (difference[1] > 0)
   {
       str += difference[1] + ' month';
       str += difference[1] + == 1 ? '' : 's';
       str += difference[2] > 0 ? ' and ' : '';
   }

   if (difference[2] > 0)
   {
       str += difference[2] + ' day';
       str += difference[2] == 1 ? '' : 's';
   }

   return str;
}