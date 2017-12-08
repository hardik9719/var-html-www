<?php\n";
  my @dictlist     = ();

  $php .= generate_comment ("### ");
  $php .= "\$SQSPELL_APP = array (\n";

  foreach my $class (@classes) {
    my $dictionaries = loaddb ($class);
    foreach ( keys %$dictionaries ){
      next if m/.*[^a-z]tex[^a-z]/i;            # Discard tex variants
      my $lang = $dictionaries->