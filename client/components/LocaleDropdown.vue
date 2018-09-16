<template>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{ locales[locale] }}
    </a>
    <div class="dropdown-menu">
      <nuxt-link
        :to="`/en` + $route.fullPath"
        class="dropdown-item Header__Link"
        active-class="none"
        exact
      >
        {{ $t('english') }}
      </nuxt-link>
      <nuxt-link
        :to="$route.fullPath.replace(/^\/[^\/]+/, '')"
        class="dropdown-item Header__Link"
        active-class="none"
        exact
      >
        {{ $t('french') }}
      </nuxt-link>
    </div>
  </li>
</template>

<script>
import { mapGetters } from 'vuex'
import { loadMessages } from '~/plugins/i18n'

export default {
  computed: mapGetters({
    locale: 'locale',
    locales: 'locales'
  }),

  methods: {

  }
}
</script>
