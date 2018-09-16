<template>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{ locales[locale] }}
    </a>
    <div class="dropdown-menu">
      <nuxt-link
        v-if="$i18n.locale === 'fr'"
        :to="`/en` + $route.fullPath"
        class="dropdown-item Header__Link"
        active-class="none"
        exact
      >
        {{ $t('english') }}
      </nuxt-link>
      <nuxt-link
        v-else
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
