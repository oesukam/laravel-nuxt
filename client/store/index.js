import Cookies from 'js-cookie'
import { cookieFromRequest } from '~/utils'

// state
export const state = () => ({
  // locale: process.env.appLocale,
  locale: 'fr',
  locales: {
    'en': 'EN',
    'fr': 'FR'
  }
})

// getters
export const getters = {
  locale: state => state.locale,
  locales: state => state.locales
}

// mutations
export const mutations = {
  SET_LANG (state, locale) {
    console.log('clearrr lang', locale)
    if (state.locales[locale]) {
      state.locale = locale
    }
  }
}

export const actions = {
  nuxtServerInit ({ commit }, { req }) {
    const token = cookieFromRequest(req, 'token')
    if (token) {
      commit('auth/SET_TOKEN', token)
    }
  },

  nuxtClientInit ({ commit }) {
    const token = Cookies.get('token')
    if (token) {
      commit('auth/SET_TOKEN', token)
    }
  }
}
